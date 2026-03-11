<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->name('articles.')->group(function () {
    Route::get('/creer', [ArticleController::class, 'createMany'])->name('create-many');
    Route::get('/modifier/{id}', [ArticleController::class, 'updateOne'])->name('update');
    Route::get('/supprimer/{id}', [ArticleController::class, 'deleteOne'])->name('delete');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('details');
});

Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});

