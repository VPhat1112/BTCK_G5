<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/product/search', [ProductController::class, 'search'])->name('products.search');

Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class,'detail_product']);


Route::post('/add-customer', [CheckoutController::class,'add_customer']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/checkout', [CheckoutController::class,'checkout']);

Route::get('/dashboard',function(){
    return view('HomePage');
})->middleware(['auth','verified'])->name('dashboard');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login_cus', [LoginController::class, 'postLogin'])->name('login_customer');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register_save', [LoginController::class, 'postRegister']);

Route::get('/auth/google/redirect', [LoginController::class, 'redirectToGoogle']);
Route::get('/auth/google/call-back', [LoginController::class, 'handleGoogleCallback']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/save_checkout',[CheckOutController::class,'save_checkout_customer'])->name('save_inf');

Route::get('/payment', [CheckOutController::class,'payment'])->name('payment');

Route::post('/save_order',[CheckOutController::class,'save_order'])->name('save_order');

Route::get('/self_Inf',[UserController::class, 'DetailsCustomer'])->name('MyAccount');
Route::get('/self_Order',[UserController::class, 'MyOrder'])->name('MyOrder');

Route::post('self_Inf_save/{customer_email}', [UserController::class,'save_Information_customer']);

Route::get('/DetailOrder/{order_id}',[UserController::class,'DetailsOrder']);


//send request
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPasswordPost'])->name('forgot.password.post');

// //reset pass
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');