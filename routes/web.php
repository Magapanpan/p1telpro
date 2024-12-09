<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPegawaiController;

Route::get('/location/kabupaten/{id_prov}', [DataPegawaiController::class, 'getKabupaten'])->name('location.kabupaten');
Route::get('/location/kecamatan/{id_kab}', [DataPegawaiController::class, 'getKecamatan'])->name('location.kecamatan');
Route::get('/location/kelurahan/{id_kec}', [DataPegawaiController::class, 'getKelurahan'])->name('location.kelurahan');

Route::middleware('auth')->group(function () {
    Route::get('/data-pegawai', [DataPegawaiController::class, 'index'])->name('data-pegawai.index');
    Route::get('data-pegawai/{nik}/edit', [DataPegawaiController::class, 'edit'])->name('data-pegawai.edit');
    Route::patch('data-pegawai/{nik}', [DataPegawaiController::class, 'update'])->name('data-pegawai.update');
});


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form')->middleware(['auth', 'checkAdmin']);
Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware(['auth', 'checkAdmin']);
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form')->middleware('guest');
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::post('/logout', action: [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Route protected untuk dashboard
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda')->middleware('auth');


Route::get('/testing', function () {
    return view('login');
});
