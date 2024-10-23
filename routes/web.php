<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('.index');
Route::get('/about-me', [IndexController::class, 'about'])->name('.about');