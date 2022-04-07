<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDokumen extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nomor_pengajuan_dokumen',
        'seri',
        'jenis_dokumen',
        'nomor_dokumen',
        'tanggal_dokumen',
        'file'
    ];

}
