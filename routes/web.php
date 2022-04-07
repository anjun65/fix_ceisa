<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;



use App\Http\Livewire\Home;
use App\Http\Livewire\IzinImpor;
use App\Http\Livewire\SuratKuasa;
use App\Http\Livewire\Ppftz;

use App\Http\Livewire\DataBarang;
use App\Http\Livewire\DataDokumen;
use App\Http\Livewire\DataPeti;
use App\Http\Livewire\DataKemasan;

use App\Http\Controllers\EditDokumenPabean;


use App\Http\Livewire\Admin\SuratKuasa as SuratKuasaAdmin;
use App\Http\Livewire\Admin\IzinImpor as IzinImporAdmin;
use App\Http\Livewire\Admin\Config\Home as ConfigHome;
use App\Http\Livewire\Admin\ManageUser;

/**
 * App Routes
 */
Route::middleware('auth')->group(function () {

    Route::get('/', Home::class);
    Route::get('/surat-kuasa', SuratKuasa::class);
    Route::get('/izin-impor', IzinImpor::class);
    Route::get('/ppftz', Ppftz::class);

    Route::get('/admin/surat-kuasa', SuratKuasaAdmin::class);
    Route::get('/admin/izin-impor', IzinImporAdmin::class);

    Route::get('/edit-dokumen-pabean/{nomor_aju_pabean}', [EditDokumenPabean::class, 'index'])->name('edit-pabean');
    Route::post('/edit-dokumen-pabean', [EditDokumenPabean::class, 'store'])->name('store-pabean');
    Route::get('/edit-data-barang/{nomor_aju_pabean}', DataBarang::class)->name('edit-barang');
    Route::get('/edit-data-dokumen/{nomor_aju_pabean}', DataDokumen::class)->name('edit-dokumen');
    Route::get('/edit-data-peti/{nomor_aju_pabean}', DataPeti::class)->name('edit-peti');
    Route::get('/edit-data-kemasan/{nomor_aju_pabean}', DataKemasan::class)->name('edit-kemasan');

    Route::get('/admin', Home::class);
    Route::get('/admin/users', ManageUser::class);

    Route::get('/admin/config/home', ConfigHome::class)->name('home-config');
});

/**
 * Authentication
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');
});
