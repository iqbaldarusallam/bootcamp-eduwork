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
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
  <div class="container position-relative">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="home.php">
      <i class="fa-solid fa-bag-shopping me-2 text-white"></i> Lazida
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a href="home.php" class="nav-link"><i class="fa-solid fa-house me-1"></i> Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link active"><i class="fa-solid fa-tags me-1"></i> Products</a></li>

        <li class="nav-item dropdown position-relative">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="cartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-cart-shopping me-1"></i> Cart
            <span id="cartCount" class="cart-badge">0</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end cart-dropdown shadow" aria-labelledby="cartDropdown" id="cartItems">
            <li class="text-center text-muted small p-2">Cart is empty</li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user me-1"></i> Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="accountDropdown">
            <li><a class="dropdown-item disabled"><i class="fa-solid fa-user-circle me-2 text-primary"></i> Iqbal Darusallam</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-right-from-bracket me-2"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="text-center py-5 bg-gradient">
  <h1 class="fw-bold text-black">Welcome to Lazida</h1>
  <p class="text-black-50 mb-0">Find your dream items</p>
</header>

<div class="container my-4">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
    
    <div class="d-flex align-items-center gap-2">
      <i class="fa-solid fa-filter text-primary"></i>
      <select id="filterCategory" class="form-select shadow-sm">
        <option value="all">All Categories</option>
        <option value="Laptop">Laptop</option>
        <option value="Smartphone">Smartphone</option>
        <option value="Headset">Headset</option>
        <option value="Mouse">Mouse</option>
        <option value="Keyboard">Keyboard</option>
      </select>
    </div>

    <div class="position-relative search-box w-100 w-md-50">
      <i class="fa-solid fa-magnifying-glass position-absolute top-50 translate-middle-y text-secondary"></i>
      <input type="text" id="searchBox" class="form-control shadow-sm" placeholder="Search products...">
    </div>
  </div>

  <div class="row" id="productContainer">
    <?php
      $result = $conn->query("SELECT * FROM products");
      while ($row = $result->fetch_assoc()):
    ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4 product-card"
          data-category="<?= htmlspecialchars($row['nama_produk']) ?>"
          data-name="<?= htmlspecialchars($row['nama_produk']) ?>">
        <div class="card border-0 shadow-sm hover-card h-100">
          <img src="<?= htmlspecialchars($row['gambar']) ?>"
               class="card-img-top"
               alt="<?= htmlspecialchars($row['nama_produk']) ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= htmlspecialchars($row['nama_produk']) ?></h5>
            <p class="card-text text-muted flex-grow-1"><?= htmlspecialchars($row['deskripsi']) ?></p>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <span class="fw-bold text-primary">
                <i class="fa-solid fa-tag me-1"></i> Rp<?= number_format($row['harga'], 0, ',', '.') ?>
              </span>
              <button class="btn btn-outline-primary btn-sm addToCart"
                      data-name="<?= htmlspecialchars($row['nama_produk']) ?>"
                      data-price="<?= $row['harga'] ?>"
                      data-image="<?= htmlspecialchars($row['gambar']) ?>">
                <i class="fa-solid fa-cart-plus me-1"></i> Add
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<footer class="bg-dark text-center text-white py-3 mt-5">
  <p class="mb-0 small">© 2025 <strong>Lazida Store</strong></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// --- cart script tetap sama ---
let cart = JSON.parse(localStorage.getItem('cart')) || [];
const cartCount = document.getElementById('cartCount');
const cartItems = document.getElementById('cartItems');

function renderCart() {
  cartCount.textContent = cart.reduce((sum, item) => sum + item.qty, 0);
  cartItems.innerHTML = '';
  if (cart.length === 0) {
    cartItems.innerHTML = '<li class="text-center text-muted small p-2">Cart is empty</li>';
    localStorage.setItem('cart', JSON.stringify(cart));
    return;
  }
  cart.forEach((item, index) => {
    const li = document.createElement('li');
    li.classList.add('dropdown-item', 'cart-item');
    li.innerHTML = `
      <img src="${item.image}" alt="${item.name}">
      <div class="item-info">
        <strong>${item.name}</strong>
        <span class="text-muted">x${item.qty}</span>
      </div>
      <div class="text-end">
        <span class="text-primary fw-bold small d-block">Rp${item.price.toLocaleString()}</span>
        <button class="remove-btn btn btn-link p-0 text-danger" data-index="${index}">
          <i class="fa-solid fa-trash-can"></i>
        </button>
      </div>
    `;
    cartItems.appendChild(li);
  });
  cartItems.innerHTML += `
    <li><hr class="my-2"></li>
    <li class="dropdown-item text-center">
      <button class="btn btn-sm btn-primary checkout-btn w-100">Checkout</button>
    </li>
  `;
  document.querySelectorAll('.remove-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const index = btn.dataset.index;
      cart.splice(index, 1);
      renderCart();
    });
  });
  localStorage.setItem('cart', JSON.stringify(cart));
}

document.querySelectorAll('.addToCart').forEach(btn => {
  btn.addEventListener('click', () => {
    const name = btn.dataset.name;
    const price = parseInt(btn.dataset.price);
    const image = btn.dataset.image;
    const existing = cart.find(item => item.name === name);
    if (existing) existing.qty++;
    else cart.push({ name, price, image, qty: 1 });
    renderCart();
    btn.classList.replace('btn-outline-primary', 'btn-success');
    btn.innerHTML = '<i class="fa-solid fa-check me-1"></i> Added!';
    setTimeout(() => {
      btn.classList.replace('btn-success', 'btn-outline-primary');
      btn.innerHTML = '<i class="fa-solid fa-cart-plus me-1"></i> Add';
    }, 1000);
  });
});

renderCart();

document.getElementById("filterCategory").addEventListener("change", function() {
  const category = this.value.toLowerCase();
  document.querySelectorAll(".product-card").forEach(card => {
    const catName = card.getAttribute("data-category").toLowerCase();
    card.style.display = (category === "all" || catName.includes(category)) ? "block" : "none";
  });
});

document.getElementById("searchBox").addEventListener("keyup", function() {
  const keyword = this.value.toLowerCase();
  document.querySelectorAll(".product-card").forEach(card => {
    const name = card.getAttribute("data-name").toLowerCase();
    card.style.display = name.includes(keyword) ? "block" : "none";
  });
});
</script>
</body>
</html>
