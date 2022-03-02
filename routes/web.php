<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RealisationController;
use App\View\Components\admin\publications;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.post');
Route::get('/realisation', [RealisationController::class, 'index'])->name('realisation');

Route::get('/offers', function () {
    return view('pages.offers');
})->name('offers');


Route::get('/a-propos', function () {
    return view('pages.who_we_are');
})->name('who_we_are');

Route::get('/publication', [publications::class, 'render'])->name('publication');
Route::get('/publication-create', [publications::class, 'create'])->name('publication.create');
Route::post('/publication-create', [publications::class, 'store'])->name('publication.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
