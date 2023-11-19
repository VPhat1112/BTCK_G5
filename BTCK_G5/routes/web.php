<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class,'detail_product']);

Route::post('/login', [CheckOutController::class,'login_customer']);

Route::post('/add-customer', [CheckoutController::class,'add_customer']);

// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::get('/view-cart', [CartController::class,'view_cart']);
// Route::get('/gio-hang', 'CartController@gio_hang');
// Route::get('/del-cart/{session_id}', 'CartController@del_cart');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/checkout', [CheckoutController::class,'checkout']);
Route::get('/logincheckout', [CheckoutController::class,'login_checkout']);