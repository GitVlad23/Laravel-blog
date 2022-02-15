<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PostController;


Route::middleware("guest:admin")->group(function() {
    Route::get('/admin/login', [App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('/admin/login_process', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function() {
    Route::get('/admin/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::resource('/admin/posts/index', PostController::class);
    Route::resource('/admin/posts',PostController::class);
    Route::post('/admin/posts/index',[App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('/admin/posts/edit',[App\Http\Controllers\Admin\PostController::class, 'edit']);
});
