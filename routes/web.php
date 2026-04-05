<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/create', [PostController::class, 'create']);

Route::post('/store', [PostController::class, 'fileStore'])->name('store');


// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
