<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    //
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!!';
});


Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1?}',
    [MahasiswaController::class, 'show'])
->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home',[HomeController::class,'index']);

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/pegawai', [PegawaiController::class, 'index']);


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
