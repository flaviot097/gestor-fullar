<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Observers\UserObserver;

/**rutas eventos y listener */

//Route::get("/orden", [OrderController::class, "Create"])->name("CreateOrder");

/** rutas obserbadores */

Route::get("/orden", [UserObserver::class, "created"])->middleware(['auth', 'verified'])->name("ObserverUser");

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('user', UserController::class);

Route::get("/caja", function () {
    return view("caja");
})->middleware(['auth', 'verified'])->name('caja-registradora');
//Route::view('/caja', 'caja')->name('caja-registradora');

//ruta deposito
Route::get("/deposito", function () {
    return view("deposito");
})->middleware(['auth', 'verified'])->name('deposito');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
