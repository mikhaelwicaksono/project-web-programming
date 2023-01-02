<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('homepage');
});
Route::get('/signin', function (){
    return view('signinpage');
})->name('Sign In Page');
Route::get('/signup', function (){
    return view('signuppage');
})->name('Sign Up Page');

Route::get('/home', [ProductController::class, 'home'])->name('Home Page');
Route::get('/mycart', function (){
    return view('viewcart');
})->name('View Cart');
Route::get('/checkout', function (){
    return view('checkout');
})->name('Check Out');
Route::get('/product', function (){
    return view('detail-product');
})->name('Detail Product');
