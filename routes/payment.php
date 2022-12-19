<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
});

Route::middleware('auth')->prefix('payment')->group(function () {
    Route::get('/', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('online', [PaymentController::class, 'online'])->name('payment.online');
    Route::post('cash', [PaymentController::class, 'cash'])->name('payment.cash');
});
