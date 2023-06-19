<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Admin\Config\ConfigValuta;
use Illuminate\Http\Request;
use App\Models\ppftz;
use App\Models\PpftzDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\ConfigCountry;
use App\Models\ConfigPelabuhan;
use App\Models\ConfigCaraPengangkutan;
use App\Models\ConfigValuta as ModelValuta;
use Barryvdh\DomPDF\Facade\Pdf;

class EditDokumenPabean extends Controller
{
    public function index($nomor_aju_pabean)
    {   
        $items = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();
        
        $country = ConfigCountry::all();
        $pelabuhan = ConfigPelabuhan::all();
        $cara_angkuts = ConfigCaraPengangkutan::all();
        $valutas = ModelValuta::all();

        return view('pages.edit-dokumen-pabean', [
            'nomor_aju_pabean' => $nomor_aju_pabean,
            'items' => $items,
            'countries' => $country,
            'pelabuhans' => $pelabuhan,
            'cara_angkuts' => $cara_angkuts,
            'valutas' => $valutas,
        ]);
        
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $data['users_id'] = Auth::id();
        
        $items = ppftz::where('nomor_aju_pabean', $request->nomor_aju_pabean)->first();

        if (empty($items)){

            $items->update($data);

            
        } else {
            $items->update($data);

            $detail = PpftzDetail::where('ppftz_id', $items->id)->first();

            if (empty($detail)){
                PpftzDetail::create([
                    'ppftz_id' => $items->id,
                    'serah_barang' => $request->serah_barang,
                    'cara_bayar' => $request->cara_bayar,
                    'ijin_bpk_pengirim' => $request->ijin_bpk_pengirim,
                    'tanggal_ijin_bpk_pengirim' => $request->tanggal_ijin_bpk_pengirim,
                    'negara_penerima' => $request->negara_penerima,
                    'jenis_identitas_penjual' => $request->jenis_identitas_penjual,
                    'nomor_identitas_penjual' => $request->nomor_identitas_penjual,
                    'nama_penjual' => $request->nama_penjual,
                    'alamat_penjual' => $request->alamat_penjual,
                    'negara_tujuan' => $request->negara_tujuan,
                    'transaksi' => $request->transaksi,
                    'transaksi_valuta' => $request->transaksi_valuta,
                    'transaksi_kurs' => $request->transaksi_kurs,
                    'transaksi_fob' => $request->transaksi_fob,
                    'transaksi_freight' => $request->transaksi_freight,
                    'jenis_asuransi' => $request->jenis_asuransi,
                    'transaksi_asuransi' => $request->transaksi_asuransi,
                    'transaksi_maklon' => $request->transaksi_maklon,
                    'transaksi_sawit' => $request->transaksi_sawit,
                    'transaksi_curah' => $request->transaksi_curah,
                ]);
            } else {
                $detail->update([
                'ppftz_id' => $items->id,
                'serah_barang' => $request->serah_barang,
                'cara_bayar' => $request->cara_bayar,
                'ijin_bpk_pengirim' => $request->ijin_bpk_pengirim,
                'tanggal_ijin_bpk_pengirim' => $request->tanggal_ijin_bpk_pengirim,
                'negara_penerima' => $request->negara_penerima,
                'jenis_identitas_penjual' => $request->jenis_identitas_penjual,
                'nomor_identitas_penjual' => $request->nomor_identitas_penjual,
                'nama_penjual' => $request->nama_penjual,
                'alamat_penjual' => $request->alamat_penjual,
                'negara_tujuan' => $request->negara_tujuan,
                'transaksi' => $request->transaksi,
                'transaksi_valuta' => $request->transaksi_valuta,
                'transaksi_kurs' => $request->transaksi_kurs,
                'transaksi_fob' => $request->transaksi_fob,
                'transaksi_freight' => $request->transaksi_freight,
                'jenis_asuransi' => $request->jenis_asuransi,
                'transaksi_asuransi' => $request->transaksi_asuransi,
                'transaksi_maklon' => $request->transaksi_maklon,
                'transaksi_sawit' => $request->transaksi_sawit,
                'transaksi_curah' => $request->transaksi_curah,
            ]);
            }
            
            
        }

        return redirect()->back()->with('message', 'Berhasil disimpan');
    }

    public function lihat($nomor_aju_pabean)
    {   
        $items = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();

        return view('pages.admin.edit-dokumen-pabean', [
            'nomor_aju_pabean' => $nomor_aju_pabean,
            'items' => $items,
        ]);
        
    }


    public function pdf($nomor_aju_pabean)
    {   
        $item = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();

        view()->share([
            'item' => $item,
        ]);

        $pdf = Pdf::loadView('pages.pdf.ppftz', [
            'item' => $item,
        ])->setPaper('a4');

        return $pdf->stream();
        
    }

    public function pdfSppb($nomor_aju_pabean)
    {   
        $item = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();

        view()->share([
            'item' => $item,
        ]);

        $pdf = Pdf::loadView('pages.pdf.ppftz-SPPB', [
            'item' => $item,
        ])->setPaper('a4');

        return $pdf->stream();
        
    }

    public function pdfNppb($nomor_aju_pabean)
    {   
        $item = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();

        view()->share([
            'item' => $item,
        ]);

        $pdf = Pdf::loadView('pages.pdf.ppftz-NPPB', [
            'item' => $item,
        ])->setPaper('a4');

        return $pdf->stream();
        
    }

    public function pdfindex($nomor_aju_pabean)
    {   
        $item = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();
        
        return view('pages.pdf-pabean', [
            'nomor_aju_pabean' => $nomor_aju_pabean,
            'item' => $item,
        ]);
    }
    
}
