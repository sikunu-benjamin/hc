<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RealisationController;
use App\View\Components\admin\devis;
use App\View\Components\admin\publications;
use App\View\Components\createproject;
use App\View\Components\myproject;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.post');
Route::get('/realisation', [RealisationController::class, 'index'])->name('realisation');
Route::get('/realisation/{realisation}/{slug?}', [RealisationController::class, 'item'])->name('realisation.item');

Route::get('/offers', function () {
    return view('pages.offers');
})->name('offers');

Route::get('/cgu', function () {
    return view('pages.cgu');
})->name('pages.cgu');

Route::get('/pourquoi-nous-faire-confiance', function () {
    return view('pages.confiance');
})->name('pages.confiance');

Route::get('/qui-sommes-nous', function () {
    return view('pages.quinoussommes');
})->name('pages.quinoussommes');

Route::get('/engagements', function () {
    return view('pages.engagements');
})->name('pages.engagements');

Route::get('/project', [createproject::class, 'render'])->middleware(['auth', 'verified'])->name('project');
Route::get('/project-my', [myproject::class, 'render'])->middleware(['auth', 'verified'])->name('project.me');
Route::post('/project', [ProjectController::class, 'store'])->middleware(['auth', 'verified'])->name('project.create');
// Route::get('/a-propos', function () {
//     return view('pages.who_we_are');
// })->name('who_we_are');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/publication', [publications::class, 'render'])->name('publication');
    Route::get('/publication-create', [publications::class, 'create'])->name('publication.create');
    Route::get('/admin/devis', [devis::class, 'render'])->name('admin.devis_all');
    Route::get('/admin/devis/{project}', [ProjectController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/devis/{project}/approuve', [ProjectController::class, 'approuve'])->name('admin.approuve');
    Route::get('/admin/devis/{project}/denied', [ProjectController::class, 'denied'])->name('admin.denied');
    Route::post('/publication-create', [publications::class, 'store'])->name('publication.store');
    Route::post('/realisation', [RealisationController::class, 'store'])->name('realisation.store');
});

require __DIR__ . '/auth.php';
