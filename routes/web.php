<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/loket/pengajuan', [DashboardController::class, 'pengajuan'])->middleware(['auth', 'verified'])->name('pengajuan');
Route::get('/loket/download/rincian-perjalanan-dinas', [DashboardController::class, 'downloadRincianPerjalananDinas'])->middleware(['auth', 'verified'])->name('downloadrincianbiayaperjalanandinas');
Route::get('/loket/download/pertanggungjawaban', [DashboardController::class, 'downloadPertanggungjawaban'])->middleware(['auth', 'verified'])->name('downloadpertanggungjawabanperjalanandinas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
