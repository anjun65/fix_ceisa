<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'pos_tarif',
        'merek',
        'jumlah_satuan',
        'bruto',
        'tipe',
        'ukuran',
        'spesifikasi_lain',
        'kode_barang',
        'asal_barang',
        'jenis_satuan',
        'jumlah_kemasan',
        'jenis_kemasan',
        'neto',
        'volume',
        'harga_ekspor',
        'fob',
        'is_lartas',
    ];
    
}
