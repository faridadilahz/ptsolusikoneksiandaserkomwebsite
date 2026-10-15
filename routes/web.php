<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayanansController;
use App\Http\Controllers\ArtikelsController;
use App\Http\Controllers\GalerisController;
use App\Http\Controllers\PesansController;
use App\Http\Controllers\ProfileController;
use App\Models\Galeris;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/beranda');

Route::get('/beranda', [BerandasController::class, 'showBeranda']);
Route::post('/review/store', [BerandasController::class, 'storeReview'])->name('review.store');

Route::get('/layanan', [BerandasController::class, 'layanan']);
Route::get('/layanan/{id}', [BerandasController::class, 'showLayanan'])->name('guest.detaillayanan');

Route::get('/artikel', [BerandasController::class, 'artikel']);
Route::get('/artikel/{id}', [BerandasController::class, 'showArtikel'])->name('guest.detailartikel');

Route::get('/galeri', [BerandasController::class, 'galeri']);
Route::get('/galeri/{id}', [BerandasController::class, 'showGaleri'])->name('guest.detailgaleri');

Route::post('/kontak/kirim', [BerandasController::class, 'kirimKontak'])->name('kontak.kirim');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dasbor', [DashboardController::class, 'index'])->name('dasbor');

    Route::get('admin/layanan', [LayanansController::class, 'index'])->name('layanan');
    Route::get('admin/layanan/tambah-layanan', [LayanansController::class, 'create'])->name('layanan.add');
    Route::post('admin/layanan/tambah-layanan', [LayanansController::class, 'store'])->name('layanan.store');

    Route::get('admin/layanan/edit-layanan/{id}', [LayanansController::class, 'edit'])->name('layanan.edit');
    Route::put('admin/layanan/{id}', [LayanansController::class, 'update'])->name('layanan.update');
    Route::delete('admin/layanan/{id}', [LayanansController::class, 'destroy'])->name('layanan.destroy');
    Route::get('admin/layanan/{id}', [LayanansController::class, 'show'])->name('layanan.show');

    Route::get('admin/artikel', [ArtikelsController::class, 'index'])->name('artikel');
    Route::get('admin/artikel/posting-artikel', [ArtikelsController::class, 'create'])->name('artikel.posting');
    Route::post('admin/artikel/posting-artikel', [ArtikelsController::class, 'store'])->name('artikel.store');
    Route::get('admin/artikel/{id}', [ArtikelsController::class, 'show'])->name('artikel.show');

    Route::get('admin/artikel/edit-artikel/{id}', [ArtikelsController::class, 'edit'])->name('artikel.edit');
    Route::put('admin/artikel/{id}', [ArtikelsController::class, 'update'])->name('artikel.update');
    Route::delete('admin/artikel/{id}', [ArtikelsController::class, 'destroy'])->name('artikel.destroy');

    Route::get('admin/galeri', [GalerisController::class, 'index'])->name('galeri');
    Route::get('admin/galeri/posting-galeri', [GalerisController::class, 'create'])->name('galeri.posting');
    Route::post('admin/galeri/posting-galeri', [GalerisController::class, 'store'])->name('galeri.store');
    Route::get('admin/galeri/{id}', [GalerisController::class, 'show'])->name('galeri.show');

    Route::get('admin/galeri/edit-galeri/{id}', [GalerisController::class, 'edit'])->name('galeri.edit');
    Route::put('admin/galeri/{id}', [GalerisController::class, 'update'])->name('galeri.update');
    Route::delete('admin/galeri/{id}', [GalerisController::class, 'destroy'])->name('galeri.destroy');

    Route::get('admin/pesan', [PesansController::class, 'index'])->name('pesan');
    Route::get('admin/pesan/{id}', [PesansController::class, 'show'])->name('pesan.show');
    Route::delete('admin/pesan/{id}', [PesansController::class, 'destroy'])->name('pesan.destroy');

    Route::get('admin/profil', [ProfileController::class, 'index'])->name('profil');

    Route::get('admin/ubahprofil', [ProfileController::class, 'ubahprofil'])->name('admin.ubahprofil');
    Route::put('admin/updateprofil', [ProfileController::class, 'editprofil'])->name('admin.updateprofil');

    Route::get('admin/kelolakatasandi', [ProfileController::class, 'kelolakatasandi'])->name('admin.kelolakatasandi');
    Route::get('admin/ubahkatasandi', [ProfileController::class, 'ubahkatasandi'])->name('admin.ubahkatasandi');
    Route::put('admin/updatekatasandi', [ProfileController::class, 'updatekatasandi'])->name('admin.updatekatasandi');
});
