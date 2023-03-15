<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\CategoryController;    
use App\Http\Controllers\ProductController;    
   

Route::get('/admin', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('backend.dashboard');
// });

Route::get('',[DashboardController::class,'view'])->name('dashboard.view');

Route::get('/user', function () {
    return view('backend.table');
});
  
Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function(){

    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{category}','show')->name('show');
    Route::get('/edit/{category}','edit')->name('edit');
    Route::post('/update/{category}','update')->name('update');
    Route::delete('/delete/{category}','destroy')->name('destroy');

});

Route::controller(ProductController::class)->name('product.')->prefix('product')->group(function(){

    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{product}','show')->name('show');
    // Route::get('/edit/{product}','edit')->name('edit');
    // Route::post('/update','update')->name('update');
    Route::delete('/delete/{product}','destroy')->name('destroy');

});

Route::get('/home', function () {
    return view('components.frontend.layouts.master');
});
  




Route::fallback(function () {
   return view ('backend.error');
});