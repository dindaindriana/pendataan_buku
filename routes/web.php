<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class);

Route::resource('/users', Controllers\UserController::class);

Route::resource('books', Controllers\BookController::class);