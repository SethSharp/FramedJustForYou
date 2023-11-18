<?php

use Illuminate\Support\Facades\Route;


// Tab group
Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['auth', 'verified', 'role:admin,manager'])->get('/dashboard', \App\Http\Controllers\ShowDashboardController::class)->name('dashboard');

    Route::middleware('auth')->name('profile.')->group(function () {
        Route::get('/profile', \App\Http\Controllers\Profile\EditProfileController::class)->name('edit');
        Route::patch('/profile', \App\Http\Controllers\Profile\UpdateProfileController::class)->name('update');
        Route::delete('/profile', \App\Http\Controllers\Profile\DeleteProfileController::class)->name('destroy');
    });
});
