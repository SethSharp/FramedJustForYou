<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['role:admin,manager'])->get('/dashboard', \App\Http\Controllers\ShowDashboardController::class)->name('dashboard');

    Route::middleware('auth')->name('profile.')->group(function () {
        Route::get('/profile', \App\Http\Controllers\Profile\EditProfileController::class)->name('edit');
        Route::patch('/profile', \App\Http\Controllers\Profile\UpdateProfileController::class)->name('update');
        Route::delete('/profile', \App\Http\Controllers\Profile\DeleteProfileController::class)->name('destroy');
    });

    Route::post('/store/file', \App\Http\Controllers\Files\StoreFileController::class)->name('file.store');
});
