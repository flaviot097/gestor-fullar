<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Observers\UserObserver;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CajaController;

/**rutas eventos y listener */

//Route::get("/orden", [OrderController::class, "Create"])->name("CreateOrder");

/** rutas obserbadores */

Route::get("/orden", [UserObserver::class, "created"])->middleware(['auth', 'verified'])->name("ObserverUser");

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('user', UserController::class);

/*Route::get("/caja", function () {
    return view("caja");
})->middleware(['auth', 'verified'])->name('caja-registradora');

#####rutas de caja#################

Route::controller(CajaController::class)->group(function () {
    Route::get("/caja", "saveCo");
});*/
Route::view('/caja', 'caja')->middleware(['auth', 'verified'])->name('caja-registradora');

//ruta deposito
Route::get("/deposito", function () {
    return view("deposito");
})->middleware(['auth', 'verified'])->name('deposito');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/Stock", function () {
    return view("Stock");
})->middleware(['auth', 'verified'])->name('stock');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//ruta crear producto
Route::Post("/create/Product", [ProductController::class, "crear"])->middleware(['auth', 'verified'])->name('product.create');
Route::get('Products', [ProductController::class, "consultar"])->middleware(['auth', 'verified'])->name("product.get");

require __DIR__ . '/auth.php';