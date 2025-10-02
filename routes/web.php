<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return '✅ TEST PAGE - BEKERJA!';
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/products', function () {
    $products = Product::where('is_active', true)->get();
    return view('products.index', compact('products'));
});