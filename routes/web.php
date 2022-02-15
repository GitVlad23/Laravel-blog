<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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



                            // Перемещение по Сайту //

                    // Странички //

// Обычные Шаблоны
Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);

// Форма Отзывов
Route::get('/review', [MainController::class, 'review'])->name('review');
Route::post('/review/check', [MainController::class, 'review_check']);


                // Форма Регистрации и Авторизации (Аутентификации) //

// Авторизация
Route::middleware("auth")->group(function()
{
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
});

// Регистрация
Route::middleware("guest")->group(function()
{
    Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/auth/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/auth/register_process', [AuthController::class, 'register'])->name('register_process');

    Route::get('/auth/forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/auth/forgot_process', [AuthController::class, 'forgot'])->name('forgot_process');
});


// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: ' . $id . '. Name: ' . $name;
// });
