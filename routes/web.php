<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// ----------------------------
// Static Pages
// ----------------------------

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/services', 'services')->name('services');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');

// ----------------------------
// Contact Form (POST)
// ----------------------------

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

// ----------------------------
// Card Page
// ----------------------------

Route::get('/card', [CardController::class, 'index'])
    ->name('card.index');
