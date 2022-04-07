<?php

namespace App\Http\Livewire\Import;

use App\Csv;
use Validator;
use Livewire\Component;
use App\Models\SuratKuasa as Kuasa;
use Auth;
use Livewire\WithFileUploads;

class SuratKuasa extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $upload;
    public $columns;

    public $fieldColumnMap = [
        'users_id' => '' ,
        'nomor_kuasa'=> '' ,
        'tanggal_kuasa'=> '' ,
        'pemberi_kuasa'=> '' ,
        'nomor_ijin_bpk'=> '' ,
        'tanggal_ijin_bpk'=> '' ,
        'penerima_kuasa'=> '' ,
        'awal_berlaku'=> '' ,
        'akhir_berlaku'=> '' ,
        'npwp_pemberi'=> '' ,
        'alamat_perusahaan'=> '' ,
        'npwp_penerima'=> '' ,
        'alamat_perusahaan_penerima'=> '' ,
        'kantor_bc_ftz'=> '' ,
        'ppftz_dikuasakan'=> '' ,
        'upload_dokumen'=> '' ,
        'status'=> '' ,
    ];
    
    protected $rules = [
        'fieldColumnMap.users_id' => 'required',
        'fieldColumnMap.nomor_kuasa' => 'required',
        'fieldColumnMap.tanggal_kuasa' => 'required',
        'fieldColumnMap.pemberi_kuasa' => 'required',
        'fieldColumnMap.nomor_ijin_bpk' => 'required',
        'fieldColumnMap.tanggal_ijin_bpk' => 'required',
        'fieldColumnMap.penerima_kuasa' => 'required',
        'fieldColumnMap.awal_berlaku' => 'required',
        'fieldColumnMap.akhir_berlaku' => 'required',
        'fieldColumnMap.alamat_perusahaan' => 'required',
        'fieldColumnMap.npwp_penerima' => 'required',
        'fieldColumnMap.alamat_perusahaan_penerima' => 'required',
        'fieldColumnMap.kantor_bc_ftz' => 'required',
        'fieldColumnMap.ppftz_dikuasakan' => 'required',
        'fieldColumnMap.upload_dokumen' => 'required',
        'fieldColumnMap.ppftz_dikuasakan' => 'required',
    ];

    protected $customAttributes = [
        'fieldColumnMap.users_id' => 'users_id',
        'fieldColumnMap.nomor_kuasa' => 'nomor_kuasa',
        'fieldColumnMap.tanggal_kuasa' => 'tanggal_kuasa',
        'fieldColumnMap.pemberi_kuasa' => 'pemberi_kuasa',
        'fieldColumnMap.nomor_ijin_bpk' => 'nomor_ijin_bpk',
        'fieldColumnMap.tanggal_ijin_bpk' => 'tanggal_ijin_bpk',
        'fieldColumnMap.penerima_kuasa' => 'penerima_kuasa',
        'fieldColumnMap.awal_berlaku' => 'awal_berlaku',
        'fieldColumnMap.akhir_berlaku' => 'akhir_berlaku',
        'fieldColumnMap.alamat_perusahaan' => 'alamat_perusahaan',
        'fieldColumnMap.npwp_penerima' => 'npwp_penerima',
        'fieldColumnMap.alamat_perusahaan_penerima' => 'alamat_perusahaan_penerima',
        'fieldColumnMap.kantor_bc_ftz' => 'kantor_bc_ftz',
        'fieldColumnMap.ppftz_dikuasakan' => 'ppftz_dikuasakan',
        'fieldColumnMap.upload_dokumen' => 'upload_dokumen',
        'fieldColumnMap.ppftz_dikuasakan' => 'ppftz_dikuasakan',
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
                Kuasa::create([
                    'users_id' => Auth::id(),
                    'nomor_kuasa'=> $row['nomor_kuasa'],
                    'tanggal_kuasa'=> $row['tanggal_kuasa'],
                    'pemberi_kuasa'=> $row['pemberi_kuasa'],
                    'nomor_ijin_bpk'=> $row['nomor_ijin_bpk'],
                    'tanggal_ijin_bpk'=> $row['tanggal_ijin_bpk'],
                    'penerima_kuasa'=> $row['penerima_kuasa'],
                    'awal_berlaku'=> $row['awal_berlaku'],
                    'akhir_berlaku'=> $row['akhir_berlaku'],
                    'npwp_pemberi'=> $row['npwp_pemberi'],
                    'alamat_perusahaan'=> $row['alamat_perusahaan'],
                    'npwp_penerima'=> $row['npwp_penerima'],
                    'alamat_perusahaan_penerima'=> $row['alamat_perusahaan_penerima'],
                    'kantor_bc_ftz'=> $row['kantor_bc_ftz'] ,
                    'ppftz_dikuasakan'=> $row['ppftz_dikuasakan'],
                    "upload_dokumen" => 0,
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
            'users_id' => ['users_id', 'user_id'] ,
            'nomor_kuasa'=> ['nomor_kuasa'],
            'tanggal_kuasa'=> ['tanggal_kuasa'],
            'pemberi_kuasa'=> ['pemberi_kuasa'],
            'nomor_ijin_bpk'=> ['nomor_ijin_bpk'],
            'tanggal_ijin_bpk'=> ['tanggal_ijin_bpk'],
            'penerima_kuasa'=> ['penerima_kuasa'],
            'awal_berlaku'=> ['awal_berlaku'],
            'akhir_berlaku'=> ['akhir_berlaku'],
            'npwp_pemberi'=> ['npwp_pemberi'],
            'alamat_perusahaan'=> ['alamat_perusahaan'],
            'npwp_penerima'=> ['npwp_penerima'],
            'alamat_perusahaan_penerima'=> ['alamat_perusahaan_penerima'],
            'kantor_bc_ftz'=> ['kantor_bc_ftz'] ,
            'ppftz_dikuasakan'=> ['ppftz_dikuasakan'],
            'upload_dokumen'=> ['upload_dokumen'],
            'status'=> ['status'],
        ];

        foreach ($this->columns as $column) {
            $match = collect($guesses)->search(fn($options) => in_array(strtolower($column), $options));

            if ($match) $this->fieldColumnMap[$match] = $column;
        }
    }
}
