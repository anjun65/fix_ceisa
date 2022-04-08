<?php

namespace App\Http\Livewire\Import;

use App\Csv;
use Validator;
use Livewire\Component;
use App\Models\ppftz as ppftzModel;
use Auth;
use Livewire\WithFileUploads;

class Ppftz extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $upload;
    public $columns;

    public $fieldColumnMap = [
        "users_id" => '',
        "nomor_aju_pabean" => '',
        "pengajuan_sebagai" => '',
        "jenis_pemberitahuan" => '',
        "jenis_pemberitahuan_lanjut" => '',
        "kategori_pemberitahuan" => '',
        "kantor_aju_pabean" => '',
        "kategori_pemasukan" => '',
        "tujuan_pemasukan" => '',
        "asal_barang" => '',
        "jenis_faktur" => '',
        "jenis_identitas_pengirim" => '',
        "nomor_identitas_pengirim" => '',
        "nama_pengirim" => '',
        "alamat_pengirim" => '',
        "jenis_identitas_penerima" => '',
        "nomor_identitas_penerima" => '',
        "nama_penerima" => '',
        "alamat_penerima" => '',
        "nomor_ijin_bpk_penerima" => '',
        "npwp_ppjk" => '',
        "nama_ppjk" => '',
        "alamat_ppjk" => '',
        "nilai_barang" => '',
        "nilai_bc11" => '',
        "tanggal_bc11" => '',
        "pos_bc11" => '',
        "subpos_bc11" => '',
        "subsubpos_bc11" => '',
        "cara_angkut" => '',
        "nama_angkut" => '',
        "bendera" => '',
        "nomor_voy_flight_pol" => '',
        "pelabuhan_muat" => '',
        "pelabuhan_tujuan" => '',
        "pelabuhan_transit" => '',
        "berat_bersih" => '',
        "berat_kotor" => '',
        "volume" => '',
        "perkiraan_tanggal_pemasukan" => '',
        "jumlah_jenis_kemasan" => '',
        "jumlah_peti_kemas" => '',
        "jumlah_jenis_barang" => '',
        "tempat_penimbunan" => '',
        "status" => '',
    ];
    
    protected $rules = [
        "fieldColumnMap.users_id" => 'required',
        "fieldColumnMap.nomor_aju_pabean" => 'required',
        "fieldColumnMap.pengajuan_sebagai" => 'required',
        "fieldColumnMap.jenis_pemberitahuan" => 'required',
        "fieldColumnMap.jenis_pemberitahuan_lanjut" => 'required',
        "fieldColumnMap.kategori_pemberitahuan" => 'required' ,
        "fieldColumnMap.kantor_aju_pabean" => 'required' ,
        "fieldColumnMap.kategori_pemasukan" => 'required' ,
        "fieldColumnMap.tujuan_pemasukan" => 'required' ,
        "fieldColumnMap.asal_barang" => 'required' ,
        "fieldColumnMap.jenis_faktur" => 'required' ,
        "fieldColumnMap.jenis_identitas_pengirim" => 'required' ,
        "fieldColumnMap.nomor_identitas_pengirim" => 'required' ,
        "fieldColumnMap.nama_pengirim" => 'required' ,
        "fieldColumnMap.alamat_pengirim" => 'required' ,
        "fieldColumnMap.jenis_identitas_penerima" => 'required' ,
        "fieldColumnMap.nomor_identitas_penerima" => 'required' ,
        "fieldColumnMap.nama_penerima" => 'required' ,
        "fieldColumnMap.alamat_penerima" => 'required' ,
        "fieldColumnMap.nomor_ijin_bpk_penerima" => 'required' ,
        "fieldColumnMap.npwp_ppjk" => 'required' ,
        "fieldColumnMap.nama_ppjk" => 'required' ,
        "fieldColumnMap.alamat_ppjk" => 'required' ,
        "fieldColumnMap.nilai_barang" => 'required' ,
        "fieldColumnMap.nilai_bc11" => 'required' ,
        "fieldColumnMap.tanggal_bc11" => 'required' ,
        "fieldColumnMap.pos_bc11" => 'required' ,
        "fieldColumnMap.subpos_bc11" => 'required' ,
        "fieldColumnMap.subsubpos_bc11" => 'required' ,
        "fieldColumnMap.cara_angkut" => 'required' ,
        "fieldColumnMap.nama_angkut" => 'required' ,
        "fieldColumnMap.bendera" => 'required' ,
        "fieldColumnMap.nomor_voy_flight_pol" => 'required' ,
        "fieldColumnMap.pelabuhan_muat" => 'required' ,
        "fieldColumnMap.pelabuhan_tujuan" => 'required' ,
        "fieldColumnMap.pelabuhan_transit" => 'required' ,
        "fieldColumnMap.berat_bersih" => 'required' ,
        "fieldColumnMap.berat_kotor" => 'required' ,
        "fieldColumnMap.volume" => 'required' ,
        "fieldColumnMap.perkiraan_tanggal_pemasukan" => 'required' ,
        "fieldColumnMap.jumlah_jenis_kemasan" => 'required' ,
        "fieldColumnMap.jumlah_peti_kemas" => 'required' ,
        "fieldColumnMap.jumlah_jenis_barang" => 'required' ,
        "fieldColumnMap.tempat_penimbunan" => 'required' ,
        "fieldColumnMap.status" => 'required' ,
    ];

    protected $customAttributes = [
        "fieldColumnMap.users_id" => 'users_id' ,
        "fieldColumnMap.nomor_aju_pabean" => 'nomor_aju_pabean' ,
        "fieldColumnMap.pengajuan_sebagai" => 'pengajuan_sebagai',
        "fieldColumnMap.jenis_pemberitahuan" => 'jenis_pemberitahuan',
        "fieldColumnMap.jenis_pemberitahuan_lanjut" => 'jenis_pemberitahuan_lanjut',
        "fieldColumnMap.kategori_pemberitahuan" => 'kategori_pemberitahuan' ,
        "fieldColumnMap.kantor_aju_pabean" => 'kantor_aju_pabean' ,
        "fieldColumnMap.kategori_pemasukan" => 'kategori_pemasukan' ,
        "fieldColumnMap.tujuan_pemasukan" => 'tujuan_pemasukan' ,
        "fieldColumnMap.asal_barang" => 'asal_barang' ,
        "fieldColumnMap.jenis_faktur" => 'jenis_faktur' ,
        "fieldColumnMap.jenis_identitas_pengirim" => 'jenis_identitas_pengirim' ,
        "fieldColumnMap.nomor_identitas_pengirim" => 'nomor_identitas_pengirim' ,
        "fieldColumnMap.nama_pengirim" => 'nama_pengirim' ,
        "fieldColumnMap.alamat_pengirim" => 'alamat_pengirim' ,
        "fieldColumnMap.jenis_identitas_penerima" => 'jenis_identitas_penerima' ,
        "fieldColumnMap.nomor_identitas_penerima" => 'nomor_identitas_penerima' ,
        "fieldColumnMap.nama_penerima" => 'nama_penerima' ,
        "fieldColumnMap.alamat_penerima" => 'alamat_penerima' ,
        "fieldColumnMap.nomor_ijin_bpk_penerima" => 'nomor_ijin_bpk_penerima' ,
        "fieldColumnMap.npwp_ppjk" => 'npwp_ppjk' ,
        "fieldColumnMap.nama_ppjk" => 'nama_ppjk' ,
        "fieldColumnMap.alamat_ppjk" => 'alamat_ppjk' ,
        "fieldColumnMap.nilai_barang" => 'nilai_barang' ,
        "fieldColumnMap.nilai_bc11" => 'nilai_bc11' ,
        "fieldColumnMap.tanggal_bc11" => 'tanggal_bc11' ,
        "fieldColumnMap.pos_bc11" => 'pos_bc11' ,
        "fieldColumnMap.subpos_bc11" => 'subpos_bc11' ,
        "fieldColumnMap.subsubpos_bc11" => 'subsubpos_bc11' ,
        "fieldColumnMap.cara_angkut" => 'cara_angkut' ,
        "fieldColumnMap.nama_angkut" => 'nama_angkut' ,
        "fieldColumnMap.bendera" => 'bendera' ,
        "fieldColumnMap.nomor_voy_flight_pol" => 'nomor_voy_flight_pol' ,
        "fieldColumnMap.pelabuhan_muat" => 'pelabuhan_muat' ,
        "fieldColumnMap.pelabuhan_tujuan" => 'pelabuhan_tujuan' ,
        "fieldColumnMap.pelabuhan_transit" => 'pelabuhan_transit' ,
        "fieldColumnMap.berat_bersih" => 'berat_bersih' ,
        "fieldColumnMap.berat_kotor" => 'berat_kotor' ,
        "fieldColumnMap.volume" => 'volume' ,
        "fieldColumnMap.perkiraan_tanggal_pemasukan" => 'perkiraan_tanggal_pemasukan' ,
        "fieldColumnMap.jumlah_jenis_kemasan" => 'jumlah_jenis_kemasan' ,
        "fieldColumnMap.jumlah_peti_kemas" => 'jumlah_peti_kemas' ,
        "fieldColumnMap.jumlah_jenis_barang" => 'jumlah_jenis_barang' ,
        "fieldColumnMap.tempat_penimbunan" => 'tempat_penimbunan' ,
        "fieldColumnMap.status" => 'status',
    ];

    public function updatingUpload($value)
    {
        Validator::make(
            ['upload' => $value],
            ['upload' => 'required|mimes:txt,csv'],
        )->validate();
    }

    public function updatedUpload()
    {
        $this->columns = Csv::from($this->upload)->columns();

        $this->guessWhichColumnsMapToWhichFields();
    }

    public function import()
    {
        $this->validate();

        $importCount = 0;

        Csv::from($this->upload)
            ->eachRow(function ($row) use (&$importCount) {
                ppftzModel::create([
                    'users_id' => Auth::id(),
                    "nomor_aju_pabean" => $row['nomor_aju_pabean'] ,
                    "pengajuan_sebagai" => $row['pengajuan_sebagai'],
                    "jenis_pemberitahuan" => $row['jenis_pemberitahuan'],
                    "jenis_pemberitahuan_lanjut" => $row['jenis_pemberitahuan_lanjut'],
                    "kategori_pemberitahuan" => $row['kategori_pemberitahuan'] ,
                    "kantor_aju_pabean" => $row['kantor_aju_pabean'],
                    "kategori_pemasukan" => $row['kategori_pemasukan'],
                    "tujuan_pemasukan" => $row['tujuan_pemasukan'],
                    "asal_barang" => $row['asal_barang'],
                    "jenis_faktur" => $row['jenis_faktur'],
                    "jenis_identitas_pengirim" => $row['jenis_identitas_pengirim'],
                    "nomor_identitas_pengirim" => $row['nomor_identitas_pengirim'],
                    "nama_pengirim" => $row['nama_pengirim'],
                    "alamat_pengirim" => $row['alamat_pengirim'],
                    "jenis_identitas_penerima" => $row['jenis_identitas_penerima'],
                    "nomor_identitas_penerima" => $row['nomor_identitas_penerima'],
                    "nama_penerima" => $row['nama_penerima'],
                    "alamat_penerima" => $row['alamat_penerima'],
                    "nomor_ijin_bpk_penerima" => $row['nomor_ijin_bpk_penerima'],
                    "npwp_ppjk" => $row['npwp_ppjk'],
                    "nama_ppjk" => $row['nama_ppjk'],
                    "alamat_ppjk" => $row['alamat_ppjk'],
                    "nilai_barang" => $row['nilai_barang'],
                    "nilai_bc11" => $row['nilai_bc11'],
                    "tanggal_bc11" => $row['tanggal_bc11'],
                    "pos_bc11" => $row['pos_bc11'],
                    "subpos_bc11" => $row['subpos_bc11'],
                    "subsubpos_bc11" => $row['subsubpos_bc11'],
                    "cara_angkut" => $row['cara_angkut'],
                    "nama_angkut" => $row['nama_angkut'],
                    "bendera" => $row['bendera'],
                    "nomor_voy_flight_pol" => $row['nomor_voy_flight_pol'],
                    "pelabuhan_muat" => $row['pelabuhan_muat'],
                    "pelabuhan_tujuan" => $row['pelabuhan_tujuan'],
                    "pelabuhan_transit" => $row['pelabuhan_transit'],
                    "berat_bersih" => $row['berat_bersih'],
                    "berat_kotor" => $row['berat_kotor'],
                    "volume" => $row['volume'],
                    "perkiraan_tanggal_pemasukan" => $row['perkiraan_tanggal_pemasukan'],
                    "jumlah_jenis_kemasan" => $row['jumlah_jenis_kemasan'],
                    "jumlah_peti_kemas" => $row['jumlah_peti_kemas'],
                    "jumlah_jenis_barang" => $row['jumlah_jenis_barang'],
                    "tempat_penimbunan" => $row['tempat_penimbunan'],
                    "status" => 'Diajukan',
                ]
                );

                $importCount++;
            });

        $this->reset();

        $this->emit('refreshTransactions');

        $this->notify('Berhasil import '.$importCount.' data!');
    }

    public function extractFieldsFromRow($row)
    {
        $attributes = collect($this->fieldColumnMap)
            ->filter()
            ->mapWithKeys(function($heading, $field) use ($row) {
                return [$field => $row[$heading]];
            })
            ->toArray();

        return $attributes + ['status' => 'success', 'date_for_editing' => now()];
    }

    public function guessWhichColumnsMapToWhichFields()
    {
        $guesses = [
            'users_id' => ['users_id', 'user_id'],
            "nomor_aju_pabean" => ['nomor_aju_pabean'],
            "pengajuan_sebagai" => ['pengajuan_sebagai'],
            "jenis_pemberitahuan" => ['jenis_pemberitahuan'],
            "jenis_pemberitahuan_lanjut" => ['jenis_pemberitahuan_lanjut'],
            "kategori_pemberitahuan" => ['kategori_pemberitahuan'],
            "kantor_aju_pabean" => ['kantor_aju_pabean'],
            "kategori_pemasukan" => ['kategori_pemasukan'],
            "tujuan_pemasukan" => ['tujuan_pemasukan'],
            "asal_barang" => ['asal_barang'],
            "jenis_faktur" => ['jenis_faktur'],
            "jenis_identitas_pengirim" => ['jenis_identitas_pengirim'],
            "nomor_identitas_pengirim" => ['nomor_identitas_pengirim'],
            "nama_pengirim" => ['nama_pengirim'],
            "alamat_pengirim" => ['alamat_pengirim'],
            "jenis_identitas_penerima" => ['jenis_identitas_penerima'],
            "nomor_identitas_penerima" => ['nomor_identitas_penerima'],
            "nama_penerima" => ['nama_penerima'],
            "alamat_penerima" => ['alamat_penerima'],
            "nomor_ijin_bpk_penerima" => ['nomor_ijin_bpk_penerima'],
            "npwp_ppjk" => ['npwp_ppjk'],
            "nama_ppjk" => ['nama_ppjk'],
            "alamat_ppjk" => ['alamat_ppjk'],
            "nilai_barang" => ['nilai_barang'],
            "nilai_bc11" => ['nilai_bc11'],
            "tanggal_bc11" => ['tanggal_bc11'],
            "pos_bc11" => ['pos_bc11'],
            "subpos_bc11" => ['subpos_bc11'],
            "subsubpos_bc11" => ['subsubpos_bc11'],
            "cara_angkut" => ['cara_angkut'],
            "nama_angkut" => ['nama_angkut'],
            "bendera" => ['bendera'],
            "nomor_voy_flight_pol" => ['nomor_voy_flight_pol'],
            "pelabuhan_muat" => ['pelabuhan_muat'],
            "pelabuhan_tujuan" => ['pelabuhan_tujuan'],
            "pelabuhan_transit" => ['pelabuhan_transit'],
            "berat_bersih" => ['berat_bersih'],
            "berat_kotor" => ['berat_kotor'],
            "volume" => ['volume'],
            "perkiraan_tanggal_pemasukan" => ['perkiraan_tanggal_pemasukan'],
            "jumlah_jenis_kemasan" => ['jumlah_jenis_kemasan'],
            "jumlah_peti_kemas" => ['jumlah_peti_kemas'],
            "jumlah_jenis_barang" => ['jumlah_jenis_barang'],
            "tempat_penimbunan" => ['tempat_penimbunan'],
            "status" => ['status'],
        ];

        foreach ($this->columns as $column) {
            $match = collect($guesses)->search(fn($options) => in_array(strtolower($column), $options));

            if ($match) $this->fieldColumnMap[$match] = $column;
        }
    }
}
