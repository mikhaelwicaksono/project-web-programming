<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('homepage');
});
Route::middleware(['User'])->group(function () {
    Route::get('/signin', function () {
        return view('signinpage');
    })->name('Sign In Page');
});
//     Route::post('/signin-member', function (Request $request) {
//         $cred = $request->only('email', 'password');
//         $rememberMe = true;
//         if ($request->remember == null) $rememberMe = false;

//         if (Auth::attempt($cred, $rememberMe)) {
//             if ($rememberMe == true) Cookie::queue('last_logged', $request->email);
//             if (Auth::user()->status == 'member') return redirect()->route('Home Member');
//             return redirect()->route('Home Admin');
//         }
//         return redirect()->back()->withErrors('invalid email or password');
//     })->name('Sign In');
// });
// Route::middleware(['auth'])->group(function () {
//     Route::get('/member-signout', function () {
//         Auth::signout();
//         return redirect()->route('Sign In Page');
//     })->name('Sign Out');
// });
// Route::middleware(['isMember'])->group(function () {
Route::get('/member-home', [ProductController::class, 'homeMemberPage'])->name('Home Member');
// });

// Route::middleware(['isAdmin'])->group(function () {
Route::get('/admin-home', [ProductController::class, 'homeAdminPage'])->name('Home Admin');



Route::get('/signup', function () {
    return view('signuppage');
})->name('Sign Up Page');

// Route::get('/home', [ProductController::class, 'home'])->name('Home Page');

Route::get('/mycart', function () {
    return view('viewcart');
})->name('View Cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('Check Out');

Route::get('/product', function () {
    return view('detail-product');
})->name('Detail Product');
