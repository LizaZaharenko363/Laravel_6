<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Pages
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/product/new', [PagesController::class, 'createform'])->name('product.createform');  

Route::get('/redirect', [RedirectController::class, '__invoke']);

// Product CRUD
Route::get('/shop', [ProductController::class, 'getAllProducts'])->name('shop');  
Route::get('/product/{id}', [ProductController::class, 'getProduct'])->name('product.show');
Route::get('/product/{id}/edit', [ProductController::class, 'editProduct'])->name('product.edit');
Route::get('/search', [ProductController::class, 'search'])->name('product.search');
Route::post('/product/created', [ProductController::class, 'store'])->name('product.store');  
Route::put('/product/{id}/update', [ProductController::class, 'updateProduct'])->name('product.update');
Route::delete('/product/{id}/delete', [ProductController::class, 'deleteProduct'])->name('product.delete');

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');
