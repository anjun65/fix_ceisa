<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKuasa;
use App\Models\ppftz;
use App\Models\IzinImpor;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   
        $ppftz_diajukan = ppftz::where('status', '=', 'Diajukan')
                    ->count();

        $ppftz_setuju = ppftz::where('status', '=', 'Disetujui')
                    ->count();

        $ppftz_ditolak = ppftz::where('status', '=', 'Ditolak')
                    ->count();
        
        $kuasa_diajukan = SuratKuasa::where('status', '=', 'Diajukan')
                    ->count();

        $kuasa_setuju = SuratKuasa::where('status', '=', 'Disetujui')
                    ->count();

        $kuasa_ditolak = SuratKuasa::where('status', '=', 'Ditolak')
                    ->count();

        $impor_diajukan = IzinImpor::where('status', '=', 'Diajukan')
                    ->count();

        $impor_setuju = IzinImpor::where('status', '=', 'Disetujui')
                    ->count();

        $impor_ditolak = IzinImpor::where('status', '=', 'Ditolak')
                    ->count();

                    
        return view('pages.dashboard', [
            'ppftz_diajukan' => $ppftz_diajukan,
            'ppftz_setuju' => $ppftz_setuju,
            'ppftz_ditolak' => $ppftz_ditolak,
            'kuasa_diajukan' => $kuasa_diajukan,
            'kuasa_setuju' => $kuasa_setuju,
            'kuasa_ditolak' => $kuasa_ditolak,
            'impor_diajukan' => $impor_diajukan,
            'impor_setuju' => $impor_setuju,
            'impor_ditolak' => $impor_ditolak,
        ])->layout('layouts.admin');
        
    }
}
