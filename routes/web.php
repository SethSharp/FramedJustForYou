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

Route::get('/team', function () { return Inertia::render('Team'); })->name('team');


// Add a group so framing.jersey, framing.memo

// Framing
Route::get('/canvas', function () { return Inertia::render('Canvas'); })->name('product.canvas');


// Services
