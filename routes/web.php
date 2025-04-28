<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('donasi.home');
});

Route::get('donasi/home', [DonasiController::class, 'home'])->name('donasi.home');

Route::get('donasi', [DonasiController::class, 'index'])->name('donasi.index');
Route::get('donasi/create', [DonasiController::class, 'create'])->name('donasi.create');
Route::post('donasi', [DonasiController::class, 'store'])->name('donasi.store');
Route::get('donasi/{id}/edit', [DonasiController::class, 'edit'])->name('donasi.edit');
Route::put('donasi/{id}', [DonasiController::class, 'update'])->name('donasi.update');
Route::delete('donasi/{id}', [DonasiController::class, 'destroy'])->name('donasi.destroy');
Route::get('donasi/riwayat', [DonasiController::class, 'trashed'])->name('donasi.trashed');
Route::put('donasi/{id}/restore', [DonasiController::class, 'restore'])->name('donasi.restore');


