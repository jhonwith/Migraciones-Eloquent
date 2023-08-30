<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//------------------------------
//-------- RUTAS ---------------
//------------------------------

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{evento}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{evento}', [EventoController::class, 'update'])->name('eventos.update');



Route::get('/eventos/{evento}/destroy', [EventoController::class, 'destroy'])->name('eventos.destroy');
Route::delete('/eventos/{evento}', [EventoController::class, 'delete'])->name('eventos.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
