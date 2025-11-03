<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', App\Http\Controllers\Public\ShowHomeController::class)->name('home');
Route::get('/about', App\Http\Controllers\Public\ShowAboutController::class)->name('about');
Route::get('/custom-framing', fn () => view('pages/custom-framing'))->name('custom-framing');
Route::get('/printing', fn () => view('pages/printing'))->name('printing');
Route::get('/contact', fn () => view('pages/contact'))->name('contact');
Route::get('/sitemap', fn () => view('pages/sitemap'))->name('sitemap');
Route::get('/privacy-policy', fn () => view('pages/privacy'))->name('privacy-policy');

Route::prefix('/services')->name('services.')->group(function () {
    Route::prefix('/custom-framing')->name('framing.')->group(function () {
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
        Route::get('/medals-and-memorabilia',
            fn () => view('pages/services/medals-and-memorabilia'))->name('medals-memorabilia');
        Route::get('/mirror', fn () => view('pages/services/mirror'))->name('mirror');
        Route::get('/prints-posters', fn () => view('pages/services/prints-posters'))->name('prints-posters');
        Route::get('/handcrafted', fn () => view('pages/services/handcrafted'))->name('handcrafted');
        Route::get('/restorations', fn () => view('pages/services/restorations'))->name('restorations');
    });

    /**
     * Glass Cutting
     * Matboard Cutting
     * Ready Mades
     * Framing Supplies
     */
    Route::get('/other', fn () => view('pages/services/other'))->name('other');
});
