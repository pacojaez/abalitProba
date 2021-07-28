<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/************************************ RUTAS DE PRODUCTS  **************************/

 Route::get('/productos/{id}', function($id) {
    return view('single-product', compact('id'));
})->name('single-product');

Route::get('/productos', [ProductController::class, 'index'])->name('productos');

Route::get('/productos/category/{id}', [ProductController::class, 'category'])->name('productos_category');

Route::get('category/{id}', function($id) {
    return view('allproductscategory', compact('id'));
})->name('categoryproducts');


/********************ADMIN ROUTES  TODO********************************/
// Route::group(['prefix' => 'admin',  'middleware' => 'isAdmin'], function(){
//     Route::get('/productos', [ProductController::class, 'adminIndex'])->name('admin-productos');
//     Route::get('/productos/show/{id}', [ProductController::class, 'adminShow'])->name('admin-productos-show');
// });

Route::get('/admin/productos', [ProductController::class, 'adminIndex'])->name('admin-productos');
Route::get('/admin/productos/show/{id}', [ProductController::class, 'adminShow'])->name('admin-productos-show');


/************************************ RUTAS DE CART  **************************/

Route::get('/cart', [CartController::class, 'index'])->name('cart');

/************************************ RUTAS DE CART  **************************/

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');


