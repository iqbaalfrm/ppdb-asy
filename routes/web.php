<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk Pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');



Route::get('/data-siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/data-ortu', [OrtuController::class, 'index'])->name('ortu.index');

Route::resource('siswa', SiswaController::class);

use App\Http\Controllers\AyahController;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\WaliController;

Route::prefix('orangtua')->group(function () {
    Route::get('/ayah', [AyahController::class, 'index'])->name('ayah.index');
    Route::get('/ayah/create', [AyahController::class, 'create'])->name('ayah.create');
    Route::post('/ayah', [AyahController::class, 'store'])->name('ayah.store');
    Route::get('/ayah/{id}/edit', [AyahController::class, 'edit'])->name('ayah.edit');
    Route::put('/ayah/{id}', [AyahController::class, 'update'])->name('ayah.update');
    Route::delete('/ayah/{id}', [AyahController::class, 'destroy'])->name('ayah.destroy');

    Route::get('/ibu', [IbuController::class, 'index'])->name('ibu.index');
    Route::get('/ibu/create', [IbuController::class, 'create'])->name('ibu.create');
    Route::post('/ibu', [IbuController::class, 'store'])->name('ibu.store');
    Route::get('/ibu/{id}/edit', [IbuController::class, 'edit'])->name('ibu.edit');
    Route::put('/ibu/{id}', [IbuController::class, 'update'])->name('ibu.update');
    Route::delete('/ibu/{id}', [IbuController::class, 'destroy'])->name('ibu.destroy');

    Route::get('/wali', [WaliController::class, 'index'])->name('wali.index');
    Route::get('/wali/create', [WaliController::class, 'create'])->name('wali.create');
    Route::post('/wali', [WaliController::class, 'store'])->name('wali.store');
    Route::get('/wali/{id}/edit', [WaliController::class, 'edit'])->name('wali.edit');
    Route::put('/wali/{id}', [WaliController::class, 'update'])->name('wali.update');
    Route::delete('/wali/{id}', [WaliController::class, 'destroy'])->name('wali.destroy');
});

// Routes/web.php
Route::get('/ayah', [AyahController::class, 'index'])->name('ayah.index');
Route::get('/ibu', [IbuController::class, 'index'])->name('ibu.index');
Route::get('/wali', [WaliController::class, 'index'])->name('wali.index');

