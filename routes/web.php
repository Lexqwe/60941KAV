<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdditionalServiceController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::get('/services/{id}', [AdditionalServiceController::class, 'show']);

Route::get('/cars', [CarController::class, 'index'])->middleware('auth');
Route::get('/car/create', [CarController::class, 'create'])->middleware('auth');
Route::post('/car', [CarController::class, 'store'])->middleware('auth');
Route::get('/car/edit/{id}', [CarController::class, 'edit'])->middleware('auth');
Route::post('/car/update/{id}', [CarController::class, 'update'])->middleware('auth');
Route::get('/car/destroy/{id}', [CarController::class, 'destroy'])->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::get('/error', function () {return view('error', ['message' => session('message')]);});
