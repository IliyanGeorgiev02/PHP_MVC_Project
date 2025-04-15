<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All-Purpose Store</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
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

  <section class="hero">
    <div class="container">
      <h2>Your One-Stop Shop for Everything</h2>
      <p>Find the best deals on electronics, fashion, home goods, and more!</p>
      <a href="{{ route('products') }}" class="btn">Shop now</a>
    </div>
  </section>

  <div class="product-grid">
  @foreach($products as $product)
    <div class="product-card">
      @if($product->image_path)
        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
      @else
        <img src="https://via.placeholder.com/200" alt="No image available" />
      @endif
      <h4>{{ $product->name }}</h4>
      <p>${{ number_format($product->price, 2) }}</p>
      <form action="{{ route('buy.product', $product->id) }}" method="POST">
        @csrf
        <button type="submit">Add to Cart</button>
      </form>
    </div>
  @endforeach
</div>

  <footer>
    <div class="container">
      <p>&copy; 2025 ShopAll. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
