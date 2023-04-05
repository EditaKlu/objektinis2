<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminGameController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Front\FrontGameController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Admin\AdminOwnerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('games', AdminGameController::class);
    Route::resource('owners', AdminOwnerController::class);
});

Route::name('front.')->group(function () {
    Route::get('/', [FrontHomeController::class, 'index'])->name('home');
    Route::resource('games', FrontGameController::class)->only(['index','show']);
});