<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// 1. Khusus Admin: Manajemen Pengguna
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/manajemen-pengguna', function () {
        return view('halaman', [
            'judul' => 'Halaman Manajemen Pengguna',
            'deskripsi' => 'Ini adalah area khusus Admin untuk mengelola akun Admin, Dosen, dan Mahasiswa.'
        ]);
    });
});

// 2. Admin & Dosen: Kelola Materi dan Kelola Nilai
Route::middleware(['auth', 'role:admin,dosen'])->group(function () {
    Route::get('/kelola-materi', function () {
        return view('halaman', [
            'judul' => 'Halaman Kelola Materi',
            'deskripsi' => 'Area ini dapat diakses oleh Admin dan Dosen untuk mengunggah atau mengubah materi perkuliahan.'
        ]);
    });

    Route::get('/kelola-nilai', function () {
        return view('halaman', [
            'judul' => 'Halaman Kelola Nilai',
            'deskripsi' => 'Area ini dapat diakses oleh Admin dan Dosen untuk menginput dan memperbarui nilai mahasiswa.'
        ]);
    });
});

// 3. Semua Role (Admin, Dosen, Mahasiswa): Lihat Materi dan Lihat Nilai
Route::middleware(['auth', 'role:admin,dosen,mahasiswa'])->group(function () {
    Route::get('/lihat-materi', function () {
        return view('halaman', [
            'judul' => 'Halaman Lihat Materi',
            'deskripsi' => 'Daftar materi perkuliahan yang dapat diakses oleh seluruh civitas akademika (Admin, Dosen, dan Mahasiswa).'
        ]);
    });

    Route::get('/lihat-nilai', function () {
        return view('halaman', [
            'judul' => 'Halaman Lihat Nilai',
            'deskripsi' => 'Informasi rekapitulasi nilai akademik yang dapat dilihat oleh Admin, Dosen, dan Mahasiswa.'
        ]);
    });
});