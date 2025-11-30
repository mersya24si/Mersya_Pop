<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!!';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa/{param1?}',
    [MahasiswaController::class, 'show'])
    ->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;

Route::get('/pegawai', [PegawaiController::class, 'index']);



Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);
Route::resource('auth', AuthController::class);
Route::resource('dashboard', DashboardController::class);


// 1. Tampilkan detail profil (GET /profile)
// Mengganti /profile/show menjadi /profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

// 2. Tampilkan formulir edit (GET /profile/edit)
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// 3. Proses pembaruan profil (PUT /profile/edit)
// Disarankan menggunakan /profile/edit untuk update jika show berada di /profile
Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');

// 4. Hapus gambar profil (DELETE /profile/picture)
Route::delete('/profile/picture', [ProfileController::class, 'destroy'])->name('profile.destroy');
