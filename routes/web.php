<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;



Route::resource('siswa', SiswaController::class);
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    $jumlahSiswa = Siswa::count();
    return view('dashboard', compact('jumlahSiswa'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
