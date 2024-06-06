<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ReportController;
use App\Models\Report;
use Illuminate\Support\Facades\Log; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/edit-profile', function () {
    return view('profile.edit');
});

Route::get('/update-password', function () {
    return view('profile/partials/update-password-form');
});

Route::get('/delete-user', function () {
    return view('profile/partials/delete-user-form');
});

Route::post('/delete-user', 'UserController@deleteUser')->middleware('auth');

Route::post('/profil', [ReportController::class, 'store'])->name('report.store');

Route::get('/report/{id}', [ReportController::class, 'delete']);

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/order-list', function () {
    return view('order-list');
})->name('order-list');

Route::get('/dashboard', function () {
    $reports = Report::all();
    // Pass reports to the view (using `with`)
    return view('dashboard')->with('reports', $reports);
})->name('dashboard');

Route::post('/order-confirmation', function (Request $request) {
    \Log::info('ambalakatum'.$request->input('orderData'));
    $orderData = $request->input('orderData');
    $data = json_decode($orderData, true);
    return view('order-confirm')->with('data', $data);
})->name('order-confirmation');

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
