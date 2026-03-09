<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.details');

Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});

