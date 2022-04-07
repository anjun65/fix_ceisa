<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class IzinImpor extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'nomor_izin_impor',
        'perusahaan',
        'alamat_perusahaan',
        'nomor_izin_bpk',
        'tanggal_izin',
        'awal_berlaku',
        'akhir_berlaku',
        
        'npwp_perusahaan',
        'nomor_surat',
        'tanggal_surat',
        'kantor_bc_ftz',
        'upload_dokumen',
        'status',

    ];

    const STATUSES = [
        'Disetujui' => 'Disetujui',
        'Ditolak' => 'Ditolak',
        'Diajukan' => 'Diajukan',
    ];

    protected $guarded = [];
    // protected $appends = ['date_for_editing'];

    public function getStatusColorAttribute()
    {
        return [
            'Disetujui' => 'green',
            'Ditolak' => 'red',
        ][$this->status] ?? 'cool-gray';
    }

    public function getDateForHumansAttribute()
    {
        return $this->date->format('M, d Y');
    }

    public function getDateForEditingAttribute()
    {
        return $this->date->format('m/d/Y');
    }

    public function setDateForEditingAttribute($value)
    {
        $this->date = Carbon::parse($value);
    }
}
