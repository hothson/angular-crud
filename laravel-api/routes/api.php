<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Get list of Products
Route::get('products', [ProductController::class, 'index']);

// Get specific Product
Route::get('product/{id}', [ProductController::class, 'show']);

// Delete a Product
Route::delete('product/{id}', [ProductController::class, 'destroy']);

// Update existing Product
Route::put('product/{id}',[ProductController::class, 'update']);

// Create new Product
Route::post('product', [ProductController::class, 'store']);