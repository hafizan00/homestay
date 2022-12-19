<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
});

Route::middleware('auth')->prefix('booking')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('Booking.index');
    Route::get('/{booking}', [BookController::class, 'show'])->name('booking.show');
    Route::post('create', [BookController::class, 'create'])->name('booking.create');
    Route::put('update', [BookController::class, 'update'])->name('booking.update');
});
