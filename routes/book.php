<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
});

Route::middleware('auth')->group(function () {
    Route::post('book', [BookController::class, 'create'])->name('book.create');
    Route::put('book', [BookController::class, 'update'])->name('book.update');
});
