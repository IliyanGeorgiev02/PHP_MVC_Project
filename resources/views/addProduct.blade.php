<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="{{ asset('css/addProduct.css') }}">
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
          <li>
          @auth
            <span>Hello, {{ Auth::user()->name }}!</span>
          @else
            <a href="{{ route('login') }}">Login</a>
          @endauth
        </li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="product-form-container">
    <h2>Add a New Product</h2>

    @if ($errors->any())
      <div class="error-box">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('success'))
      <div class="success-box">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="price">Price ($)</label>
        <input type="number" name="price" id="price" step="0.01" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4" required></textarea>
      </div>

      <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" name="image" id="image" accept="image/*">
    </div>

      <button type="submit">Add Product</button>
    </form>
  </div>
</body>
</html>
