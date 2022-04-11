<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;



use App\Http\Livewire\Home;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\IzinImpor;
use App\Http\Livewire\SuratKuasa;
use App\Http\Livewire\Ppftz;

use App\Http\Livewire\DataBarang;
use App\Http\Livewire\DataDokumen;
use App\Http\Livewire\DataPeti;
use App\Http\Livewire\DataKemasan;

use App\Http\Controllers\EditDokumenPabean;

use App\Http\Livewire\Admin\Home as HomeAdmin;
use App\Http\Livewire\Admin\Ppftz as ppftzAdmin;
use App\Http\Livewire\Admin\SuratKuasa as SuratKuasaAdmin;
use App\Http\Livewire\Admin\IzinImpor as IzinImporAdmin;
use App\Http\Livewire\Admin\Config\Home as ConfigHome;
use App\Http\Livewire\Admin\ManageUser;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;

use App\Http\Livewire\Admin\DataBarang as DataBarangAdmin;
use App\Http\Livewire\Admin\DataDokumen as DataDokumenAdmin;
use App\Http\Livewire\Admin\DataPeti as DataPetiAdmin;
use App\Http\Livewire\Admin\DataKemasan as DataKemasanAdmin;

use App\Http\Livewire\Admin\DokumenPPJK as DokumenPPJKAdmin;

use App\Http\Livewire\Admin\Config;
use App\Http\Livewire\Admin\Config\ConfigCountry;
use App\Http\Livewire\Admin\Config\ConfigValuta;
use App\Http\Livewire\Admin\Config\ConfigDocumentCode;
use App\Http\Livewire\Admin\Config\ConfigCaraPengangkutan;

use App\Http\Livewire\DokumenPPJK;
/**
 * App Routes
 */
Route::middleware('auth')->group(function () {

    Route::get('/', Home::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/surat-kuasa', SuratKuasa::class);
    Route::get('/izin-impor', IzinImpor::class);
    Route::get('/ppftz', Ppftz::class);
    Route::get('/dokumen-ppjk', DokumenPPJK::class);

    Route::get('/edit-dokumen-pabean/{nomor_aju_pabean}', [EditDokumenPabean::class, 'index'])->name('edit-pabean');
    Route::post('/edit-dokumen-pabean', [EditDokumenPabean::class, 'store'])->name('store-pabean');
    Route::get('/edit-data-barang/{nomor_aju_pabean}', DataBarang::class)->name('edit-barang');
    Route::get('/edit-data-dokumen/{nomor_aju_pabean}', DataDokumen::class)->name('edit-dokumen');
    Route::get('/edit-data-peti/{nomor_aju_pabean}', DataPeti::class)->name('edit-peti');
    Route::get('/edit-data-kemasan/{nomor_aju_pabean}', DataKemasan::class)->name('edit-kemasan');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dokumen-ppjk', DokumenPPJKAdmin::class);
    Route::get('/admin/ppftz', ppftzAdmin::class);
    Route::get('/admin/surat-kuasa', SuratKuasaAdmin::class);
    Route::get('/admin/izin-impor', IzinImporAdmin::class);
    
    Route::get('/admin/edit-dokumen-pabean/{nomor_aju_pabean}', [EditDokumenPabean::class, 'lihat'])->name('admin-edit-pabean');
    Route::get('/admin/edit-data-barang/{nomor_aju_pabean}', DataBarangAdmin::class)->name('admin-edit-barang');
    Route::get('/admin/edit-data-dokumen/{nomor_aju_pabean}', DataDokumenAdmin::class)->name('admin-edit-dokumen');
    Route::get('/admin/edit-data-peti/{nomor_aju_pabean}', DataPetiAdmin::class)->name('admin-edit-peti');
    Route::get('/admin/edit-data-kemasan/{nomor_aju_pabean}', DataKemasanAdmin::class)->name('admin-edit-kemasan');

    

    Route::get('/admin', HomeAdmin::class);
    Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin-dashboard');
    Route::get('/admin/users', ManageUser::class);

    Route::get('/admin/config', Config::class);
    Route::get('/admin/config/home', ConfigHome::class)->name('home-config');
    Route::get('/admin/config/country', ConfigCountry::class)->name('country-config');
    Route::get('/admin/config/valuta', ConfigValuta::class)->name('valuta-config');
    Route::get('/admin/config/document-code', ConfigDocumentCode::class)->name('document-code-config');
    Route::get('/admin/config/cara-pengangkutan', ConfigCaraPengangkutan::class)->name('cara-pengangkutan-config');
});

/**
 * Authentication
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    // Route::get('/register', Register::class)->name('auth.register');
});
