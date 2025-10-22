<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/please-login', function () {
    return view('auth.please-login');
})->name('please-login');

Route::get('/products', function () {
    return view('products');
})->middleware('auth')->name('products');

Route::get('/order/complete', function () {
    return view('order.complete');
})->name('order.complete');

Route::get('/order/complete_debug', function () {
    return view('order.complete_debug');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
