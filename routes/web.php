<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/productos', function() {
//     return view('allproducts');
// })->name('allproducts');

//Route::get('/productos/{product}', [ProductController::class, 'show'])->name('single-product');

//Route::get('/productos/{product}', function($product) {
//    return view('single-product', ['product' => $product ]);
//})->name('single-product');
 Route::get('/productos/{id}', function($id) {
    return view('single-product', compact('id'));
})->name('single-product');

Route::get('/productos', [ProductController::class, 'index'])->name('productos');


/************************************ RUTAS DE CART  **************************/

Route::get('/cart', [CartController::class, 'index'])->name('cart');


