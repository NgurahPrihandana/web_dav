from flask import Flask, request, jsonify
from pymongo import MongoClient
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import linear_kernel
import numpy as np

app = Flask(__name__)


@app.route('/recommend')
# def recommend():
#     return 'Hello world'

def recommend():
    user_id = request.args.get('user_id')
    if user_id:
        recommendations = get_recommendations(int(user_id))
        return jsonify(recommendations)
    return jsonify([])

if __name__ == '__main__':
    app.run(debug=True)