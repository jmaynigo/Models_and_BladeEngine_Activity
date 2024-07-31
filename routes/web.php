<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);