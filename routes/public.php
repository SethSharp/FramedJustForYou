<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Here is where the public routes for the website are defined
|
*/

Route::get('/new/', \App\Http\Controllers\Public\ShowHomeController::class)->name('new.home');
Route::get('/new/about', \App\Http\Controllers\Public\ShowAboutController::class)->name('new.about');
Route::get('/new/contact', fn () => view('pages/contact'))->name('new.contact');
Route::get('/new/custom-framing', fn () => view('pages/custom-framing'))->name('new.custom-framing');
Route::get('/new/printing', fn () => view('pages/printing'))->name('new.printing');


Route::prefix('new/services')->name('new.services.')->group(function () {
    Route::prefix('new/custom-framing')->name('framing.')->group(function () {
        /**
         * Acrylic
         * Canvases
         * Indigenous Art
         * Jigsaws
         * Medals & Memorabilia
         * Mirror
         * Original Artwork
         * Prints, Posters & Photos
         * HandCrafted
         * Restorations
         */
        Route::get('/acrylic', fn () => view('pages/services/acrylic'))->name('acrylic');
        Route::get('/canvas', fn () => view('pages/services/canvas'))->name('canvas');
        Route::get('/indigenous', fn () => view('pages/services/indigenous'))->name('indigenous');
        Route::get('/jigsaw', fn () => view('pages/services/jigsaw'))->name('jigsaw');
    });

    Route::prefix('new.other')->name('new.other.')->group(function () {
        /**
         * Glass Cutting
         * Matboard Cutting
         * Ready Mades
         * Framing Supplies
         */
    });
});
