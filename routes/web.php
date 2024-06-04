<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/edit-profile', function () {
    return view('edit');
});

Route::get('/delete-user', function () {
    return view('profile/partials/delete-user-form');
});

Route::post('/delete-user', 'UserController@deleteUser')->middleware('auth');

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/order-list', function () {
    return view('order-list');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/order-confirmation', function () {
    return view('order-confirm');
});

Route::get('/contact-us', function () {
    return view('contact-us-login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
