<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Name 1</title>
  <link rel="stylesheet" href="{{ asset('css/styles2.css') }}" />
</head>
<body>
<header>
    <div class="container nav">
      <h1 class="logo">ShopAll</h1>
      <nav>
        <ul>
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="{{ route('addProduct') }}" class="cart-btn">Create a listing</a></li>
          <li><a href="#" class="cart-btn">🛒 Cart</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container product-page">
    <div class="product-detail">
      <img src="https://via.placeholder.com/400" alt="Product 1" />
      <div class="product-info">
        <h2>Product Name 1</h2>
        <p class="price">$29.99</p>
        <p class="description">
          This is a detailed description of Product 1. It includes features, specs, and why it’s awesome.
        </p>
        <button>Add to Cart</button>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2025 ShopAll. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
