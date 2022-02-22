<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.post');

Route::get('/offers', function () {
    return view('pages.offers');
})->name('offers');

Route::get('/realisation', function () {
    return view('pages.realisation');
})->name('realisation');

Route::get('/a-propos', function () {
    return view('pages.who_we_are');
})->name('who_we_are');
