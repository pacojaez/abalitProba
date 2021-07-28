<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\OrderItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/******ROUTES with the logic, bad done */
        // Route::get('products', function(){
        //     return Product::all();
        // });

        // Route::get('products/{id}', function( $id ){
        //     return Product::findOrFail( $id );
        // });

        // Route::post('products', function( Request $request ){
        //     return Product::create( $request->all());
        // });

        // Route::put('products({id}', function( Request $request, $id){
        //     $product = Product::findOrFail( $id );
        //     $product->update($request->all());

        //     return $product;
        // });

        // Route::delete('products/{id}', function( $id ){
        //     Product::findOrFail( $id )->delete();
        //     return 204;
        // });


/******* ROUTES WITH THE LOGIC IN THE CONTROLLER
                AND BINDING THE MODEL           ******* */

Route::get('products', [ProductController::class, 'index'] );

Route::get('products/{product}', [ProductController::class, 'show']);

Route::post('products', [ProductController::class, 'store']);

Route::put('products/edit/{product}', [ProductController::class, 'update']);

Route::delete('products/delete/{product}', [ProductController::class, 'destroy']);



/******* ROUTES WITH THE LOGIC IN THE CONTROLLER
                AND BINDING THE MODEL USER          ******* */

Route::get('users', [UserController::class, 'index'] );

Route::get('users/{user}', [UserController::class, 'show']);

Route::post('users', [UserController::class, 'store']);

Route::put('users/edit/{user}', [UserController::class, 'update']);

Route::delete('user/delete/{user}', [UserController::class, 'destroy']);

/******* ROUTES WITH THE LOGIC IN THE CONTROLLER
            AND BINDING THE MODEL ORDER          ******* */

Route::get('orders', [OrderController::class, 'index'] );

Route::get('orders/{order}', [OrderController::class, 'show']);

Route::post('orders', [OrderController::class, 'store']);

Route::put('orders/edit/{order}', [OrderController::class, 'update']);

Route::delete('order/delete/{order}', [OrderController::class, 'destroy']);


/******* ROUTES WITH THE LOGIC IN THE CONTROLLER
                AND BINDING THE MODEL ORDERITEM          ******* */

Route::get('orderitems', [OrderItemController::class, 'index'] );

Route::get('orderitems/{orderitem}', [OrderItemController::class, 'show']);

Route::post('orderitems', [OrderItemController::class, 'store']);

Route::put('orderitems/edit/{orderitem}', [OrderItemController::class, 'update']);

Route::delete('orderitem/delete/{orderitem}', [OrderItem::class, 'destroy']);
