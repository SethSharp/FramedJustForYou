<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
