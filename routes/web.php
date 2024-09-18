<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;

// Route to display a list of nasabah
Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');

// Route to show the form to create a new nasabah
Route::get('/nasabah/create', [NasabahController::class, 'create'])->name('nasabah.create');

// Route to store a newly created nasabah
Route::post('/nasabah', [NasabahController::class, 'store'])->name('nasabah.store');

// Route to show the form for editing a nasabah
Route::get('/nasabah/{nasabah}/edit', [NasabahController::class, 'edit'])->name('nasabah.edit');

// Route to update a specific nasabah
Route::put('/nasabah/{nasabah}', [NasabahController::class, 'update'])->name('nasabah.update');

// Route to delete a specific nasabah
Route::delete('/nasabah/{nasabah}', [NasabahController::class, 'destroy'])->name('nasabah.destroy');
