from flask import Flask, request, jsonify
import pandas as pd
import joblib
from sklearn.metrics.pairwise import cosine_similarity
from scipy.sparse import csr_matrix

app = Flask(__name__)

# Muat model dan data saat aplikasi mulai
tfidf_vectorizer = joblib.load('tfidf_vectorizer.pkl')
tfidf_matrix_normalized = joblib.load('tfidf_matrix_normalized.pkl')
anime_data = pd.read_csv('anime_data.csv')

# Ubah tfidf_matrix_normalized menjadi sparse jika belum
tfidf_matrix_normalized = csr_matrix(tfidf_matrix_normalized)

# Menghitung kembali similarity matrix sebagai sparse matrix
similarity_matrix = cosine_similarity(tfidf_matrix_normalized, dense_output=False)

def anime_recommendations(nama_anime_list, similarity_matrix, items, k=20):
    similar_scores = pd.DataFrame(index=items['title'])
    for nama_anime in nama_anime_list:
        if nama_anime not in items['title'].values:
            continue
        anime_index = items[items['title'] == nama_anime].index[0]
        similarity_vector = similarity_matrix[anime_index].toarray().flatten()
        similar_scores[nama_anime] = similarity_vector
    
    similar_scores['mean_similarity'] = similar_scores.mean(axis=1)
    similar_scores = similar_scores.drop(nama_anime_list, errors='ignore')
    similar_scores = similar_scores.nlargest(k, 'mean_similarity')

    recommendations = pd.DataFrame({
        'title': similar_scores.index,
        'similarity_score': similar_scores['mean_similarity'].values
    })
    recommendations = recommendations.merge(items, on='title')
    recommendations = recommendations.sort_values(by='similarity_score', ascending=False)

    return recommendations.head(k)

@app.route('/recommend', methods=['POST'])
def recommend():
    request_data = request.get_json()
    nama_anime_list = request_data.get('nama_anime_list', [])
    if not nama_anime_list:
        return jsonify({'error': 'No anime titles provided'}), 400
    
    recommendations = anime_recommendations(nama_anime_list, similarity_matrix, anime_data, k=20)
    return recommendations.to_json(orient='records')

if __name__ == '__main__':
    app.run(debug=True)
