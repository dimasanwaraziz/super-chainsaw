<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApprovalController;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pengajuan', [DashboardController::class, 'pengajuan'])->middleware(['auth', 'verified'])->name('pengajuan');
Route::get('/pengajuan/baru', [DashboardController::class, 'pengajuanbaru'])->middleware(['auth', 'verified'])->name('pengajuan.baru');

Route::post('/download/rincian-perjalanan-dinas', [DownloadController::class, 'downloadRincianPerjalananDinas'])->middleware(['auth', 'verified'])->name('downloadrincianbiayaperjalanandinas');
Route::post('/download/pertanggungjawaban', [DownloadController::class, 'downloadPertanggungjawaban'])->middleware(['auth', 'verified'])->name('downloadpertanggungjawabanperjalanandinas');
Route::post('/download/tandaterimaperjalanandinas', [DownloadController::class, 'downloadTandaTerimaPerjalananDinas'])->middleware(['auth', 'verified'])->name('downloadtandaterimaperjalanandinas');
Route::post('/download/daftarnominal', [DownloadController::class, 'downloadDaftarNominal'])->middleware(['auth', 'verified'])->name('downloaddaftarnominal');
Route::post('/download/surattugas', [DownloadController::class, 'downloadSuratTugas'])->middleware(['auth', 'verified'])->name('downloadsurattugas');

Route::get('/approval', [ApprovalController::class, 'index'])->middleware(['auth', 'verified', 'role:karo'])->name('approval');
Route::get('/approval/{id}', [ApprovalController::class, 'show'])->middleware(['auth', 'verified', 'role:karo'])->name('approval.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
