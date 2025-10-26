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
      height: 500px;
      object-fit: cover;
      object-position: center;
      filter: brightness(45%);
      transition: filter 0.5s ease;
    }

    .carousel-caption {
      background: rgba(0, 0, 0, 0);
      border-radius: 12px;
      padding: 30px 40px;
    }

    .btn-primary {
      background: linear-gradient(90deg, #007bff, #6610f2);
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #6610f2, #007bff);
    }

    #heroCarousel .carousel-control-prev-icon,
    #heroCarousel .carousel-control-next-icon {
      filter: invert(1) brightness(200%);
    }

    footer {
      background-color: #111;
    }

    .category-card {
      transition: all 0.1s ease;
      border: none;
      background-color: #fff;
    }

    .category-card .card-body {
      transition: all 0.3s ease;
    }

    .category-card i {
      transition: color 0.3s ease;
    }

    .category-card:hover,
    .category-card:active {
      background-color: #000;
      color: #fff;
      transform: translateY(-3px);
    }

    .category-card:hover i,
    .category-card:hover h6,
    .category-card:hover a,
    .category-card:active i,
    .category-card:active h6,
    .category-card:active a {
      color: #fff !important;
    }

    .category-card a {
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .category-card:hover a {
      color: #fff;
      text-decoration: underline;
    }
  </style>
</head>

<body class="bg-light">

<!-- Navbar -->
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

<!-- Hero Carousel -->
<section id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=1920&q=80" class="d-block w-100">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="fw-bold text-white mb-3 display-5 text-uppercase">Welcome to Lazida Store</h1>
        <p class="lead text-white-50 mb-4">Elegant. Simple. Modern.</p>
        <a href="index.php" class="btn btn-light btn-lg px-4 shadow rounded-pill">
          <i class="fa-solid fa-cart-shopping me-2"></i> Shop Now
        </a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1468495244123-6c6c332eeece?w=1920&q=80" class="d-block w-100">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="fw-bold text-white mb-3 display-5 text-uppercase">Premium Technology</h1>
        <p class="lead text-white-50 mb-4">Discover the Latest Innovations</p>
        <a href="index.php" class="btn btn-light btn-lg px-4 shadow rounded-pill">
          <i class="fa-solid fa-cart-shopping me-2"></i> Shop Now
        </a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1491933382434-500287f9b54b?w=1920&q=80" class="d-block w-100">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="fw-bold text-white mb-3 display-5 text-uppercase">Exclusive Collection</h1>
        <p class="lead text-white-50 mb-4">Curated for You</p>
        <a href="index.php" class="btn btn-light btn-lg px-4 shadow rounded-pill">
          <i class="fa-solid fa-cart-shopping me-2"></i> Shop Now
        </a>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</section>

<!-- Category Section -->
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
      <div class="card category-card shadow-sm h-100">
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

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <p class="mb-0 small">© 2025 <strong>Lazida Store</strong></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
