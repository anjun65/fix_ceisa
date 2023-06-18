<?php

namespace App\Models;

use App\Http\Livewire\Admin\Ppftz;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpftzDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppftz_id',
        'serah_barang',
        'cara_bayar',
        'ijin_bpk_pengirim',
        'tanggal_ijin_bpk_pengirim',
        'negara_penerima',
        'jenis_identitas_penjual',
        'nomor_identitas_penjual',
        'nama_penjual',
        'alamat_penjual',
        'negara_tujuan',
        'transaksi',
        'transaksi_valuta',
        'transaksi_kurs',
        'transaksi_fob',
        'transaksi_freight',
        'jenis_asuransi',
        'transaksi_asuransi',
        'transaksi_maklon',
        'transaksi_sawit',
        'transaksi_curah',
        'transaksi_cif',
        'transaksi_voluntary',
    ];


    public function ppftz()
    {
        return $this->belongsTo(Ppftz::class, 'ppftz_id', 'id');
    }
}
