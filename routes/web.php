<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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

Route::post('/signin-user', function(Request $request){
    $cred = $request->only('email', 'password');
    $remember_me = true;
    if ($request->remember == null) $remember_me = false;

    if (Auth::attempt($cred, $remember_me)) {
        if($remember_me == true) Cookie::queue('last_logged', $request->email);
        return redirect()->route('Home Page');
    }
    return redirect()->back()->withErrors('invalid email or password');
})->name('Sign In For User');

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
