<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Here is where public routes for the website are defined
|
*/

Route::get('/new/', fn () => view('pages/home'))->name('new.home');
Route::get('/new/about', fn () => view('pages/about'))->name('new.about');
Route::get('/new/contact', fn () => view('pages/contact'))->name('new.contact');
Route::get('/new/custom-framing', fn () => view('pages/custom-framing'))->name('new.custom-framing');
Route::get('/new/printing', fn () => view('pages/printing'))->name('new.printing');
