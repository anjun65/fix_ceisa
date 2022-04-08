<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ppftz;
use Illuminate\Support\Facades\Auth;

class EditDokumenPabean extends Controller
{
    public function index($nomor_aju_pabean)
    {   
        $items = ppftz::where('nomor_aju_pabean', $nomor_aju_pabean)->first();

        return view('pages.edit-dokumen-pabean', [
            'nomor_aju_pabean' => $nomor_aju_pabean,
            'items' => $items,
        ]);
        
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);;
        $data['users_id'] = Auth::id();
        
        $items = ppftz::where('nomor_aju_pabean', $request->nomor_aju_pabean)->first();

        if (empty($items)){
            ppftz::create($data);
        } else {
            $items->update($data);
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
}
