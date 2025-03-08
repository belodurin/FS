<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('pages.index', ['title' => 'Главная страница']);
});

Route::get('/neft', function () {
    return view('pages.neft', ['title' => 'Автоматизация нефтяной промышленности']);
})->name('Автоматизация нефтяной промышленности');

Route::get('/food-industry', function () {
    return view('pages.food-industry', ['title' => 'Автоматизация пищевой промышленности']);
})->name('Автоматизация пищевой промышленности');

Route::get('/news', function () {
    return view('pages.news', ['title' => 'Новости в сфере автоматизации']);
})->name('Новости в сфере автоматизации');

Route::get('/login', function () {
    return view('pages.auth-login', ['title' => 'Авторизация']);
})->name('Авторизация');




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/order', [OrderController::class, 'showOrderForm'])->name('order');
    Route::post('/order', [OrderController::class, 'submitOrder']);
});
