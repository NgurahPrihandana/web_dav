<?php
include_once 'configs.php';
include_once 'auth.php';
checkLogin();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anime AI</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Box Icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body>
  <div class="container-fluid d-flex flex-column flex-md-row p-0">
    <nav class="sidebar">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="img/logo.png" alt="">
          </span>
          <div class="text logo-text">
            <span class="name">Anime AI</span>
            <span class="profession"><?= $_SESSION['username']; ?></span>
          </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
      </header>
      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <form action="telusuri.php" method="GET" class="d-flex">
              <input type="text" name="search" class="form-control" placeholder="Search..." value="">
              <button type="submit" class="btn btn-primary ms-2">Search</button>
            </form>
          </li>
          <ul class="menu-links">
            <li class="nav-link">
              <a href="<?= BASE_URL; ?>/" class="active">
                <i class='bx bx-home icon'></i>
                <span class="text nav-text">Home</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="<?= BASE_URL; ?>/telusuri.php">
                <i class='bx bx-globe icon'></i>
                <span class="text nav-text">Telusuri</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="<?= BASE_URL; ?>/analitik.php">
                <i class='bx bx-pie-chart-alt icon'></i>
                <span class="text nav-text">Analitik & Trend</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="<?= BASE_URL; ?>/favorit.php">
                <i class='bx bxs-heart-circle icon'></i>
                <span class="text nav-text">Favoritku</span>
              </a>
            </li>
            <!-- <li class="nav-link">
              <a href="/pengaturan">
                <i class='bx bx-cog icon'></i>
                <span class="text nav-text">Pengaturan</span>
              </a>
            </li> -->
          </ul>
        </div>
        <div class="bottom-content">
          <li>
            <a href="<?= BASE_URL ?>/logout.php">
              <i class='bx bx-log-out icon'></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
          <li class="mode">
            <div class="sun-moon">
              <i class='bx bx-moon icon moon'></i>
              <i class='bx bx-sun icon sun'></i>
            </div>
            <span class="mode-text text">Dark mode</span>
            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>
    <section class="home flex-grow-1 p-3">
      <div class="container">
        <div class="row mt-4">
          <h4>Anime Tailored Based on People Who just Like you</h4>
          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="anime/detail/" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <h4>Anime that Similar to What You Like</h4>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card mt-2" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="js/script.js"></script>
</body>

</html>