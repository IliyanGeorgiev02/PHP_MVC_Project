<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - ShopAll</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  
  <div class="login-container">
    <h2>Login to Your Account</h2>

    @if (session('error'))
      <div class="error-box">
          {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </div>

      <div class="form-group checkbox">
        <label>
          <input type="checkbox" name="remember">
          Remember Me
        </label>
      </div>

      <button type="submit">Login</button>
    </form>

    <p class="register-link">
      Don't have an account? <a href="{{ route('register') }}">Register</a>
    </p>
  </div>
</body>
</html>
