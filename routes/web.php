<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/product/detail',function(){
    return view('products.product-detail');
});

Route::get('/cart',function(){
    return view('products.cart');
});

Route::get('/profile',function(){
    return view('user.profile');
});