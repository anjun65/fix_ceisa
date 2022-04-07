<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class SuratKuasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'nomor_kuasa',
        'tanggal_kuasa',
        'pemberi_kuasa',
        'nomor_ijin_bpk',
        'tanggal_ijin_bpk',
        'penerima_kuasa',
        'awal_berlaku',
        'akhir_berlaku',
        'npwp_pemberi',
        'alamat_perusahaan',
        'npwp_penerima',
        'alamat_perusahaan_penerima',
        'kantor_bc_ftz',
        'ppftz_dikuasakan',
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
        return $this->date->format('m-d-Y');
    }

    public function setDateForEditingAttribute($value)
    {
        $this->date = Carbon::parse($value);
    }
}
