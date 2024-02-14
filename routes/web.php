<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$locale = Request::segment(1);
if (in_array($locale, ['en', 'ge', 'de'])) {
    \App::setLocale($locale);
} else {
    $locale = null;
}

Route::prefix($locale)->group(function () {

    Route::get('/', [PortfolioController::class, 'home'])
        ->name('home');

    Route::get('about', [AboutController::class, 'show'])
        ->name('about');

    Route::get('/portfolio/{category}', [PortfolioController::class, 'list'])
        ->name('portfolio');

    Route::get('/item/{name}/{id}', [PortfolioController::class, 'detail'])
        ->name('portfolio');

    Route::get('contact', [ContactController::class, 'show'])
        ->name('contact');

});