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
