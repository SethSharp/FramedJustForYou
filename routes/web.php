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
Route::get('/printing', function () { return Inertia::render('Printing'); })->name('printing');
Route::get('/contact', function () { return Inertia::render('Contact'); })->name('contact');
Route::get('/other-services', function () { return Inertia::render('Services'); })->name('services');
Route::get('/gallery', function () { return Inertia::render('Gallery'); })->name('gallery');
Route::get('/find', function () { return Inertia::render('Find'); })->name('find');

Route::get('/custom-framing', function () { return Inertia::render('Framing/Framing'); })->name('framing');
Route::get('/custom-framing/memorabilia', function () { return Inertia::render('Framing/Memorabilia'); })->name('memorabilia');

Route::get('/store', function () { return Inertia::render('Find'); })->name('store');

//Route::prefix('framing')->name('framing.')->group(function () {
//    Route::get('/custom', function () { return Inertia::render('Framing/Custom'); })->name('custom');
//    Route::get('/mirror', function () { return Inertia::render('Framing/Mirror'); })->name('mirror');
//    Route::get('/jersey', function () { return Inertia::render('Framing/Jersey'); })->name('jersey');
//    Route::get('/memorabilia', function () { return Inertia::render('Framing/Memorabilia'); })->name('memorabilia');
//});
