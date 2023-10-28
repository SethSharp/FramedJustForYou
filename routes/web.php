<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Grouped by header
Route::get('/', function () { return Inertia::render('Home'); })->name('home');
Route::get('/about', function () { return Inertia::render('About'); })->name('about');
Route::get('/locator', function () { return Inertia::render('Locator'); })->name('locator');
Route::get('/art-studio', function () { return Inertia::render('Studio'); })->name('studio');
Route::get('/gallery', function () { return Inertia::render('Gallery'); })->name('gallery');
Route::get('/find', function () { return Inertia::render('Find'); })->name('find');

Route::get('/store', function () { return Inertia::render('Store'); })->name('store');

Route::get('/faq', function () { return Inertia::render('FAQ'); })->name('faq');

Route::prefix('services')->name('services.')->group(function () {

    Route::prefix('framing')->name('framing.')->group(function () {
        Route::get('/acrylic', function () { return Inertia::render('Services/Framing/Acrylic'); })->name('acrylic');
        Route::get('/australian-made-framing-kits', function () { return Inertia::render('Services/Framing/AusMade'); })->name('australian');
        Route::get('/canvas-stretching', function () { return Inertia::render('Services/Framing/CanvasStretching'); })->name('canvas-stretching');
        Route::get('/hanging-systems', function () { return Inertia::render('Services/Framing/HangingSystems'); })->name('hanging-systems');
        Route::get('/indigenous-art', function () { return Inertia::render('Services/Framing/Indigenous'); })->name('indigenous-art');
        Route::get('/jigsaws', function () { return Inertia::render('Services/Framing/Jigsaw'); })->name('jigsaws');
        Route::get('/medals-and-memorabilia', function () { return Inertia::render('Services/Framing/Memorabilia'); })->name('medals-memorabilia');
        Route::get('/mirror', function () { return Inertia::render('Services/Framing/Mirror'); })->name('mirror');
        Route::get('/original-artwork', function () { return Inertia::render('Services/Framing/OriginalArtwork'); })->name('original-artwork');
        Route::get('/prints-posters-and-photos', function () { return Inertia::render('Services/Framing/PrintsPostersAndPhotos'); })->name('prints-posters-and-photos');
        Route::get('/tapestries-and-needlework', function () { return Inertia::render('Services/Framing/TapestriesAndNeedlework'); })->name('tapestries-and-needlework');

        Route::get('/restorations', function () { return Inertia::render('Services/Framing/Restorations'); })->name('restorations');
    });


    Route::get('/custom-framing', function () { return Inertia::render('Services/Framing'); })->name('framing');
    Route::get('/printing', function () { return Inertia::render('Services/Printing'); })->name('printing');


    Route::prefix('other')->name('other.')->group(function () {
        Route::get('/glass-cutting', function () { return Inertia::render('Services/Other/GlassCutting'); })->name('glass-cutting');
        Route::get('/matboard-cutting', function () { return Inertia::render('Services/Other/MatboardCutting'); })->name('matboard-cutting');
        Route::get('/ready-made', function () { return Inertia::render('Services/Other/ReadyMade'); })->name('ready-made');
    });
});
