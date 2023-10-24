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
Route::get('/contact', function () { return Inertia::render('Contact'); })->name('contact');
Route::get('/art-studio', function () { return Inertia::render('Studio'); })->name('studio');
Route::get('/gallery', function () { return Inertia::render('Gallery'); })->name('gallery');
Route::get('/find', function () { return Inertia::render('Find'); })->name('find');

Route::get('/store', function () { return Inertia::render('Store'); })->name('store');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/custom-framing', function () { return Inertia::render('Services/Framing'); })->name('framing');
    Route::get('/printing', function () { return Inertia::render('Services/Printing'); })->name('printing');
    Route::prefix('framing')->name('framing.')->group(function () {
        Route::get('/jigsaw', function () { return Inertia::render('Services/Framing/Jigsaw'); })->name('jigsaw');
        Route::get('/embroidery', function () { return Inertia::render('Services/Framing/Embroidery'); })->name('embroidery');
        Route::get('/mirror', function () { return Inertia::render('Services/Framing/Mirror'); })->name('mirror');
        Route::get('/memorabilia', function () { return Inertia::render('Services/Framing/Memorabilia'); })->name('memorabilia');
        Route::get('/fixes', function () { return Inertia::render('Services/Framing/Fix'); })->name('fix');
    });
});
