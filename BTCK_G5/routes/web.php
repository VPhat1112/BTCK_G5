<?php


use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Users\HomeController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login-user');
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login/store', [LoginController::class, 'store']);

Route::middleware('isAdmin')->group(function () {
    Route::get('/admin', [MainController::class, 'index'])->name('admin');
    Route::get('/admin/main', [MainController::class, 'index']);
    
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('admin', [MainController::class, 'index'])->name('admin');
//     Route::get('admin/main', [MainController::class, 'index']);
// });

// Route::prefix('/')->middleware('isAdmin')->group(function () {
//     Route::get('admin', [MainController::class, 'index'])->name('admin');
//     Route::get('admin/main', [MainController::class, 'index']);
    
// });

 

