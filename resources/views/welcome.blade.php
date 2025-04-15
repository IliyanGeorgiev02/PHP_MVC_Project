<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to ShopAll</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to <span class="brand">ShopAll</span>
        </h1>
        <p>Your one-stop shop for everything.</p>
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline">Register</a>
        </div>
    </div>
</body>
</html>
