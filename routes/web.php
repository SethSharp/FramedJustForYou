<?php

use Inertia\Inertia;
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


Route::get('/', \App\Http\Controllers\Public\ShowHomeController::class)->name('home');
Route::get('/about', \App\Http\Controllers\Public\ShowAboutController::class)->name('about');
Route::get('/custom-framing', fn () => view('pages/custom-framing'))->name('custom-framing');
Route::get('/printing', fn () => view('pages/printing'))->name('printing');
Route::get('/contact', fn () => view('pages/contact'))->name('contact');
Route::get('/sitemap', fn () => view('pages/sitemap'))->name('sitemap');

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
        Route::get('/medals-and-memorabilia', fn () => view('pages/services/medals-and-memorabilia'))->name('medals-memorabilia');
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

//Route::get('/', function () {
//    return Inertia::render('Home');
//})->name('home');
//Route::get('/about', function () {
//    return Inertia::render('About');
//})->name('about');
//Route::get('/faq', function () {
//    return Inertia::render('FAQ');
//})->name('faq');
//Route::get('/contact', function () {
//    return Inertia::render('Find');
//})->name('contact');
//Route::get('/locator', function () {
//    return Inertia::render('Locator');
//})->name('locator');
//Route::get('/store', function () {
//    return Inertia::render('Store');
//})->name('store');
//Route::get('/sitemap', function () {
//    return Inertia::render('Sitemap');
//})->name('sitemap');
//
//Route::prefix('services')->name('services.')->group(function () {
//    Route::prefix('framing')->name('framing.')->group(function () {
//        Route::get('/acrylic', function () {
//            return Inertia::render('Services/Framing/Acrylic');
//        })->name('acrylic');
//
//        Route::get('/australian-made-framing-kits', function () {
//            return Inertia::render('Services/Framing/AusMade');
//        })->name('australian');
//
//        Route::get('/canvases', function () {
//            return Inertia::render('Services/Framing/CanvasStretching');
//        })->name('canvases');
//
//        Route::get('/indigenous-art', function () {
//            return Inertia::render('Services/Framing/Indigenous');
//        })->name('indigenous-art');
//
//        Route::get('/jigsaws', function () {
//            return Inertia::render('Services/Framing/Jigsaw');
//        })->name('jigsaws');
//
//        Route::get('/medals-and-memorabilia', function () {
//            return Inertia::render('Services/Framing/Memorabilia');
//        })->name('medals-memorabilia');
//
//        Route::get('/mirror', function () {
//            return Inertia::render('Services/Framing/Mirror');
//        })->name('mirror');
//
//        Route::get('/original-artwork', function () {
//            return Inertia::render('Services/Framing/OriginalArtwork');
//        })->name('original-artwork');
//
//        Route::get('/prints-posters-and-photos', function () {
//            return Inertia::render('Services/Framing/PrintsPostersAndPhotos');
//        })->name('prints-posters-and-photos');
//
//        Route::get('/handcrafted', function () {
//            return Inertia::render('Services/Framing/HandCrafted');
//        })->name('hand-crafted');
//
//        Route::get('/restorations', function () {
//            return Inertia::render('Services/Framing/Restorations');
//        })->name('restorations');
//    });
//
//    Route::get('/custom-framing', function () {
//        return Inertia::render('Services/Framing');
//    })->name('framing');
//
//    Route::get('/printing', function () {
//        return Inertia::render('Services/Printing');
//    })->name('printing');
//
//    Route::prefix('other')->name('other.')->group(function () {
//        Route::get('/glass-cutting', function () {
//            return Inertia::render('Services/Other/GlassCutting');
//        })->name('glass-cutting');
//
//        Route::get('/matboard-cutting', function () {
//            return Inertia::render('Services/Other/MatboardCutting');
//        })->name('matboard-cutting');
//
//        Route::get('/ready-made', function () {
//            return Inertia::render('Services/Other/ReadyMade');
//        })->name('ready-made');
//
//        Route::get('/framing-supplies', function () {
//            return Inertia::render('Services/Other/FramingSupplies');
//        })->name('framing-supplies');
//    });
//});

require __DIR__ . '/public.php';
