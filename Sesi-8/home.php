<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lazida | Ecommerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    .carousel-inner img {
      width: 100%;
      height: 400px; 
      object-fit: cover; /* biar isi penuh tanpa distorsi */
      object-position: center; /* fokus di tengah gambar */
    }
  </style>
</head>

<body class="bg-light">

<!-- ✅ NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="home.php">
      <i class="fa-solid fa-bag-shopping me-2 text-white"></i> Lazida
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a href="home.php" class="nav-link active"><i class="fa-solid fa-house me-1"></i> Home</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link"><i class="fa-solid fa-tags me-1"></i> Products</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
            <i class="fa-solid fa-user me-1"></i> Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><a class="dropdown-item disabled"><i class="fa-solid fa-user-circle me-2 text-primary"></i> Iqbal Darusallam</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-right-from-bracket me-2"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="bg-gradient-primary text-dark text-center py-5">
  <div class="container">
    <h1 class="fw-bold mb-3">Welcome to Lazida</h1>
    <p class="lead mb-4">Your favorite tech store for Lazida Store</p>
    <a href="index.php" class="btn btn-light btn-lg px-4 shadow">
      <i class="fa-solid fa-cart-shopping me-2"></i> Start Shopping
    </a>
  </div>
</section>

<section class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Hot Deals & Promotions 🔥</h2>
    <p class="text-muted">Get the best offers before they're gone!</p>
  </div>

  <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow" style="max-height: 400px; overflow:hidden;">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1546502208-81d149d52bd7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YmlnJTIwc2FsZSUyMGVsZWN0cm9uaWN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=600" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="Banner-Carousels1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="Banner-Carousel2.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

<section class="container py-5">
  <h3 class="fw-bold text-center mb-4">Shop by Category</h3>
  <div class="row text-center g-3">
    <?php
      $categories = [
        ['Laptop', 'fa-laptop'],
        ['Smartphone', 'fa-mobile-screen'],
        ['Headset', 'fa-headphones'],
        ['Mouse', 'fa-computer-mouse'],
        ['Keyboard', 'fa-keyboard']
      ];
      foreach ($categories as $cat):
    ?>
    <div class="col-6 col-md-4 col-lg-2 mx-auto">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <i class="fa-solid <?= $cat[1] ?> text-dark display-5 mb-2"></i>
          <h6><?= $cat[0] ?></h6>
          <a href="index.php" class="stretched-link text-decoration-none text-primary small">View Products</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  <p class="mb-0 small">© 2025 <strong>Lazida Store</strong></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
