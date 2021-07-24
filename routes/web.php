<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/productos', function() {
//     return view('allproducts');
// })->name('allproducts');

Route::get('/productos/{product}', [ProductController::class, 'show'])->name('single-product');

Route::get('/productos', [ProductController::class, 'index'])->name('productos');



//****TODO******/
/****
 *
 * USAR COMPONENTES DE LIVEWIRE PARA REFACTORIZAR LA APP LO MÁS POSIBLE
 *
 *
 */
