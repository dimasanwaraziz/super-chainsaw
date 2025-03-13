<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApprovalController;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/loket/pengajuan', [DashboardController::class, 'pengajuan'])->middleware(['auth', 'verified'])->name('pengajuan');
Route::get('/loket/pengajuan/baru', [DashboardController::class, 'pengajuanbaru'])->middleware(['auth', 'verified'])->name('pengajuanbaru');
Route::get('/loket/download/rincian-perjalanan-dinas', [DashboardController::class, 'downloadRincianPerjalananDinas'])->middleware(['auth', 'verified'])->name('downloadrincianbiayaperjalanandinas');
Route::get('/loket/download/pertanggungjawaban', [DashboardController::class, 'downloadPertanggungjawaban'])->middleware(['auth', 'verified'])->name('downloadpertanggungjawabanperjalanandinas');
Route::get('/loket/download/tandaterimaperjalanandinas', [DashboardController::class, 'downloadTandaTerimaPerjalananDinas'])->middleware(['auth', 'verified'])->name('downloadtandaterimaperjalanandinas');
Route::get('/loket/download/daftarnominal', [DashboardController::class, 'downloadDaftarNominal'])->middleware(['auth', 'verified'])->name('downloaddaftarnominal');
Route::get('/loket/download/surattugas', [DashboardController::class, 'downloadSuratTugas'])->middleware(['auth', 'verified'])->name('downloadsurattugas');

Route::get('/approval', [ApprovalController::class, 'index'])->middleware(['auth', 'verified', 'role:karo'])->name('approval');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
