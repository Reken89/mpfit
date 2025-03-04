<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::patch('/products/update', [ProductController::class, 'ProductUpdate']);
Route::delete('/products/delete', [ProductController::class, 'ProductDelete']);
Route::post('/products/add', [ProductController::class, 'ProductAdd']);
Route::get('/products/table', [ProductController::class, 'ProductTable']);
Route::get('/detailing/table', [ProductController::class, 'DetailingTable']);
Route::get('/products/detailing{id}', [ProductController::class, 'DetailingView'])->name('detailing');
Route::get('/products', [ProductController::class, 'ProductView'])->name('products');

Route::post('/orders/add', [OrderController::class, 'OrderAdd']);
Route::patch('/orders/update', [OrderController::class, 'OrderUpdate']);
Route::get('/orders/table', [OrderController::class, 'OrderTable']);
Route::get('/orders', [OrderController::class, 'OrderView'])->name('orders');
