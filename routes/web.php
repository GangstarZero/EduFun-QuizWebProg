<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;


Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category/{category}', 'index')->name('category');
});

Route::controller(PostController::class)->group(function(){
    Route::get('post/{postId}', 'index')->name('post');
});
