<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\AdminDashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/beasiswa', [BeasiswaController::class, 'adminIndex'])->name('admin.beasiswa');
    Route::get('/beasiswa', [BeasiswaController::class, 'adminIndex'])->name('beasiswa.index');
    Route::get('/admin/beasiswa/create', [BeasiswaController::class, 'create'])->name('beasiswa.create');
    Route::post('admin/beasiswa/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
    Route::put('/admin/beasiswa/{id}', [BeasiswaController::class, 'update'])->name('beasiswa.update');
    Route::delete('/admin/beasiswa/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');



    Route::get('/admin/pekerjaan', [LowonganKerjaController::class, 'adminIndex'])->name('admin.pekerjaan');
    Route::post('/pekerjaan/store', [LowonganKerjaController::class, 'store'])->name('pekerjaan.store');
    Route::put('/pekerjaan/{id}', [LowonganKerjaController::class, 'update'])->name('pekerjaan.update');
    Route::delete('/pekerjaan/{id}', [LowonganKerjaController::class, 'destroy'])->name('pekerjaan.destroy');
});

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/pekerjaan', [LowonganKerjaController::class, 'index'])->name('pekerjaan.index');
require __DIR__ . '/auth.php';
