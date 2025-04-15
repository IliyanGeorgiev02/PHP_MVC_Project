<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products</title>
    <link rel="stylesheet"  href="{{ asset('css/products.css') }}">
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

    <h1>All Products</h1>
<div id="products">
    @foreach($products as $product)
        <div class="product">
            @if($product->image_path)
                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
            @endif

            <h2>{{ $product->name }}</h2>
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p>{{ $product->description }}</p>
            <form action="{{ route('buy.product', $product->id) }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="buy-button">
                    Add to Cart
                </button>
            </form>
        </div>
    @endforeach
    </div>

</body>
</html>
