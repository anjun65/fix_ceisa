<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppftz extends Model
{
    use HasFactory;

    protected $fillable = [
        "users_id",
        "nomor_aju_pabean",
        "pengajuan_sebagai",
        "jenis_pemberitahuan",
        "jenis_pemberitahuan_lanjut",
        "kategori_pemberitahuan",
        "kantor_aju_pabean",
        "kategori_pemasukan",
        "tujuan_pemasukan",
        "asal_barang",
        "jenis_faktur",
        "jenis_identitas_pengirim",
        "nomor_identitas_pengirim",
        "nama_pengirim",
        "alamat_pengirim",
        "jenis_identitas_penerima",
        "nomor_identitas_penerima",
        "nama_penerima",
        "alamat_penerima",
        "nomor_ijin_bpk_penerima",
        "npwp_ppjk",
        "nama_ppjk",
        "alamat_ppjk",
        "nilai_barang",
        "nilai_bc11",
        "tanggal_bc11",
        "pos_bc11",
        "subpos_bc11",
        "subsubpos_bc11",
        "cara_angkut",
        "nama_angkut",
        "bendera",
        "nomor_voy_flight_pol",
        "pelabuhan_muat",
        "pelabuhan_tujuan",
        "pelabuhan_transit",
        "berat_bersih",
        "berat_kotor",
        "volume",
        "perkiraan_tanggal_pemasukan",
        "jumlah_jenis_kemasan",
        "jumlah_peti_kemas",
        "jumlah_jenis_barang",
        "tempat_penimbunan",
        "status",
    ];

    const STATUSES = [
        'Disetujui' => 'Disetujui',
        'Ditolak' => 'Ditolak',
        'Diajukan' => 'Diajukan',
    ];
}
