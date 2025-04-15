<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ProductController::class, 'index'])->name('index');

Route::get('/item/{id}', function ($id) {
    return view('item', ['id' => $id]);
});

Route::get('/register', function () {
    return view('reg');
})->name("register");

Route::post('/register', [UserController::class, 'register'])->name('users.register');

Route::get('/login', function () {
    return view('log');
})->name("login");

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/addProduct', function () {
    return view('addProduct');
})->name('addProduct');

Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');

Route::get('/products',[ProductController::class, 'getAll'])->name('products');

Route::post('/buy/{id}', [ProductController::class, 'buy'])->name('buy.product');

?>