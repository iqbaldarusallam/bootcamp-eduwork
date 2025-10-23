const products = [
  // Electronics
  {
    name: "iPhone 15 Pro",
    description: "Latest Apple smartphone with A17 chip.",
    price: 1199,
    image: "https://images.unsplash.com/photo-1710023038502-ba80a70a9f53?w=600",
    category: "Electronics",
  },
  {
    name: "MacBook Air M2",
    description: "Lightweight laptop with powerful M2 chip.",
    price: 1499,
    image: "https://images.unsplash.com/photo-1509395176047-4a66953fd231?w=600",
    category: "Electronics",
  },
  {
    name: "Sony Headphones",
    description: "Noise-cancelling wireless headphones.",
    price: 299,
    image: "https://images.unsplash.com/photo-1580894908361-967195033215?w=600",
    category: "Electronics",
  },
  {
    name: "Samsung Smart TV",
    description: "4K UHD television with HDR10 support.",
    price: 799,
    image:
      "https://images.samsung.com/is/image/samsung/assets/id/tvs/2024/2024-tvs-pcd-f06-qled-pc-2.jpg?$1440_N_JPG$",
    category: "Electronics",
  },
  {
    name: "Apple Watch 9",
    description: "Smartwatch with health and fitness tracking.",
    price: 399,
    image: "https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=600",
    category: "Electronics",
  },

  // Fashion
  {
    name: "Men’s Leather Jacket",
    description: "Stylish genuine black leather jacket.",
    price: 250,
    image: "https://images.unsplash.com/photo-1727515546577-f7d82a47b51d?w=600",
    category: "Fashion",
  },
  {
    name: "Classic Sneakers",
    description: "Comfortable and modern design sneakers.",
    price: 120,
    image: "https://images.unsplash.com/photo-1494496195158-c3becb4f2475?w=600",
    category: "Fashion",
  },
  {
    name: "Formal Suit",
    description: "Premium quality black formal suit.",
    price: 300,
    image:
      "https://plus.unsplash.com/premium_photo-1658506833628-e758f73bb413?w=600",
    category: "Fashion",
  },
  {
    name: "Designer Handbag",
    description: "Elegant handbag for all occasions.",
    price: 180,
    image:
      "https://plus.unsplash.com/premium_photo-1664392147011-2a720f214e01?w=600",
    category: "Fashion",
  },
  {
    name: "Modern Sunglasses",
    description: "UV-protected sunglasses for daily wear.",
    price: 80,
    image: "https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?w=600",
    category: "Fashion",
  },

  // Home
  {
    name: "Modern Sofa Set",
    description: "3-seater comfortable grey sofa.",
    price: 950,
    image: "https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600",
    category: "Home",
  },
  {
    name: "Wooden Dining Table",
    description: "Elegant 6-seater wooden table.",
    price: 780,
    image: "https://images.unsplash.com/photo-1505691723518-36a5ac3be353?w=600",
    category: "Home",
  },
  {
    name: "Bed Lamp",
    description: "Warm light bedside lamp.",
    price: 75,
    image:
      "https://plus.unsplash.com/premium_photo-1681223965823-bab3eba5b18c?w=600",
    category: "Home",
  },
  {
    name: "Wall Art Frame",
    description: "Minimalist painting for living room.",
    price: 120,
    image: "https://images.unsplash.com/photo-1666031331584-3294a14abfc7?w=600",
    category: "Home",
  },
  {
    name: "Indoor Plant Pot",
    description: "Fresh green plant in ceramic pot.",
    price: 50,
    image: "https://images.unsplash.com/photo-1501004318641-b39e6451bec6?w=600",
    category: "Home",
  },

  // Sports
  {
    name: "Football Pro",
    description: "Official size and quality football.",
    price: 55,
    image: "https://images.unsplash.com/photo-1508609349937-5ec4ae374ebf?w=600",
    category: "Sports",
  },
  {
    name: "Mountain Bike",
    description: "Durable and lightweight bike.",
    price: 899,
    image: "https://images.unsplash.com/photo-1504215680853-026ed2a45def?w=600",
    category: "Sports",
  },
  {
    name: "Yoga Mat",
    description: "Non-slip fitness mat for daily exercise.",
    price: 35,
    image: "https://images.unsplash.com/photo-1591291621164-2c6367723315?w=600",
    category: "Sports",
  },
  {
    name: "Running Shoes",
    description: "Comfortable and flexible running shoes.",
    price: 110,
    image: "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600",
    category: "Sports",
  },
  {
    name: "Tennis Racket",
    description: "Professional lightweight tennis racket.",
    price: 150,
    image: "https://images.unsplash.com/photo-1615343303847-443dd6167322?w=600",
    category: "Sports",
  },

  // Books
  {
    name: "Mindset by Carol Dweck",
    description: "Change how you think to succeed.",
    price: 25,
    image: "https://images.unsplash.com/photo-1512820790803-83ca734da794?w=600",
    category: "Books",
  },
  {
    name: "Sumur by Eka Kurniawan",
    description: "A tale of friendship and love amid poverty.",
    price: 20,
    image:
      "https://www.gramedia.com/blog/content/images/2022/01/9786020653242_SUMUR--1-.jpg",
    category: "Books",
  },
  {
    name: "Atomic Habits",
    description: "Tiny changes that lead to remarkable results.",
    price: 30,
    image: "https://images.unsplash.com/photo-1516979187457-637abb4f9353?w=600",
    category: "Books",
  },
  {
    name: "Deep Work",
    description: "Rules for focused success in a distracted world.",
    price: 32,
    image: "https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=600",
    category: "Books",
  },
  {
    name: "Rich Dad Poor Dad",
    description: "Financial literacy classic.",
    price: 28,
    image: "https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=600",
    category: "Books",
  },
];

const productContainer = document.getElementById("productContainer");
const searchInput = document.getElementById("searchInput");
const filterButtons = document.querySelectorAll("[data-category]");
const cartCount = document.getElementById("cartCount");
const cartItems = document.getElementById("cartItems");
const cartTotal = document.getElementById("cartTotal");

let cart = [];

function displayProducts(filteredProducts) {
  productContainer.innerHTML = "";
  filteredProducts.forEach((p) => {
    const col = document.createElement("div");
    col.className = "col-sm-6 col-md-4 col-lg-3";
    col.innerHTML = `
      <div class="card h-100 border-0 shadow-sm">
        <div class="bg-white d-flex justify-content-center align-items-center" style="height: 250px; overflow: hidden;">
          <img 
            src="${p.image}" 
            alt="${p.name}" 
            class="img-fluid" 
            style="max-height: 100%; width: auto; object-fit: contain;"
          >
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-semibold">${p.name}</h5>
          <p class="card-text small text-muted">${p.description}</p>
          <div class="mt-auto">
            <p class="fw-bold mb-2">$${p.price}</p>
            <button class="btn btn-dark w-100 add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
    `;
    const button = col.querySelector(".add-to-cart");
    button.addEventListener("click", () => addToCart(p));
    productContainer.appendChild(col);
  });
}

function filterProducts(category) {
  if (category === "all") return products;
  return products.filter((p) => p.category === category);
}

filterButtons.forEach((btn) => {
  btn.addEventListener("click", () => {
    filterButtons.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    updateDisplay();
  });
});

searchInput.addEventListener("input", updateDisplay);

function updateDisplay() {
  const activeBtn = document.querySelector(".btn-outline-dark.active");
  const category = activeBtn ? activeBtn.getAttribute("data-category") : "all";
  const filtered = filterProducts(category);
  const searchTerm = searchInput.value.toLowerCase();
  const finalList = filtered.filter((p) =>
    p.name.toLowerCase().includes(searchTerm)
  );
  displayProducts(finalList);
}

function addToCart(product) {
  cart.push(product);
  updateCart();
}

function updateCart() {
  cartCount.textContent = cart.length;
  cartItems.innerHTML = "";

  let total = 0;
  cart.forEach((item) => {
    total += item.price;
    const div = document.createElement("div");
    div.className = "col-12 d-flex align-items-center border-bottom pb-2";
    div.innerHTML = `
      <img src="${item.image}" class="me-3 rounded" style="width: 60px; height: 60px; object-fit: contain;">
      <div class="flex-grow-1">
        <h6 class="mb-0">${item.name}</h6>
        <small class="text-muted">$${item.price}</small>
      </div>
    `;
    cartItems.appendChild(div);
  });

  cartTotal.textContent = total.toFixed(2);
}

displayProducts(products);
