<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('.index');
Route::get('/about-me', [IndexController::class, 'about'])->name('.about');
Route::get('/experience', [IndexController::class, 'experience'])->name('.experience');
Route::get('/projects', [IndexController::class, 'projects'])->name('.projects');

Route::get('/{filename}', [IndexController::class, 'downloadResume'])->name('.download-resume');