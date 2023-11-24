<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class,'detail_product']);

Route::post('/login', [CheckOutController::class,'login_customer']);

Route::post('/add-customer', [CheckoutController::class,'add_customer']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/checkout', [CheckoutController::class,'checkout']);
// Route::get('/logincheckout', [CheckoutController::class,'login_checkout'])->name('logincheckout');

Route::get('/login', [CheckoutController::class, 'login'])->name('login');
Route::get('/login_cus', [CheckoutController::class, 'login_customer'])->name('login_customer');
// Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [CheckoutController::class, 'register'])->name('register');
// Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logout', [CheckoutController::class, 'logout'])->name('logout');

Route::post('/save_checkout',[CheckOutController::class,'save_checkout_customer'])->name('save_inf');

Route::get('/payment', [CheckOutController::class,'payment'])->name('payment');

Route::post('/save_order',[CheckOutController::class,'save_order'])->name('save_order');

Route::get('/self_Inf',[UserController::class, 'DetailsCustomer'])->name('MyAccount');
Route::get('/self_Order',[UserController::class, 'MyOrder'])->name('MyOrder');

Route::post('self_Inf_save/{customer_email}', [UserController::class,'save_Information_customer']);

Route::get('/DetailOrder/{order_id}',[UserController::class,'DetailsOrder']);