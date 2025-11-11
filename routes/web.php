<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [registerController::class, 'showForm']);
Route::post('/register', [registerController::class, 'register'])->name('register.store');