<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
});

Route::middleware('auth')->group(function () {
    Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('payment', [PaymentController::class, 'online'])->name('payment.online');
    Route::post('payment', [PaymentController::class, 'cash'])->name('payment.cash');
});
