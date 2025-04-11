<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('home',[HomeController::class, 'index']);
Route::middleware('isAdmin')->group(function(){
    Route::controller(ProductController::class)->group(function(){
        Route::get('createproduct','create')->name('products.create');
        Route::post('productstore','store')->name('store');
        Route::get('admin/products','index')->name('products.index');
    });
});