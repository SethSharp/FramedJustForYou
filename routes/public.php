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


Route::prefix('new/services')->name('new.services')->group(function () {
   Route::prefix('new/custom-framing')->name('new.framing.')->group(function () {
       /**
        * Acrylic
        * Australian made
        * Canvases
        * Indigenous Art
        * Jigsaws
        * Medals & Memorabilia
        * Mirror
        * Original Artwork
        * Prints, Posters & Photos
        * HandCrafted
        * Restorations
        * Canvas (NEW))
        */
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
