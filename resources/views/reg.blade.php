<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - ShopAll</title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

  <div class="register-container">
    <h2>Create an Account</h2>

    @if ($errors->any())
      <div class="error-messages">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </div>

      <div class="form-group">
        <label for="psw-repeat">Confirm Password</label>
        <input type="password" name="psw-repeat" id="psw-repeat" required>
      </div>

      <button type="submit">Register</button>
    </form>

    <p class="login-link">
      Already have an account? <a href="{{ route('login') }}">Log in</a>
    </p>
  </div>
</body>
</html>
