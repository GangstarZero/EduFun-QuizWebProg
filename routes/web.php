<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;


Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/aboutUs', 'aboutUs')->name('aboutUs');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category/{category}', 'index')->name('category');
});

Route::controller(PostController::class)->group(function(){
    Route::get('post/{postId}', 'index')->name('post');
});

Route::controller(WritersController::class)->group(function(){
    Route::get('writer', 'index')->name('writer');
    Route::get('writer/{userId}', 'writerPost')->name('writerPost');
});

Route::controller(PopularController::class)->group(function(){
    Route::get('popular', 'index')->name('popular');
});

