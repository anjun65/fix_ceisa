<?php

namespace App\Http\Livewire\Import;

use App\Csv;
use Validator;
use Livewire\Component;
use App\Models\IzinImpor as IzinImporModel;
use Auth;
use Livewire\WithFileUploads;

class IzinImpor extends Component
{

    use WithFileUploads;

    public $showModal = false;
    public $upload;
    public $columns;

    public $fieldColumnMap = [
        'users_id' => '' ,
        'nomor_izin_impor'=> '' ,
        'perusahaan'=> '' ,
        'alamat_perusahaan'=> '' ,
        'nomor_izin_bpk'=> '' ,
        'tanggal_izin'=> '' ,
        'awal_berlaku'=> '' ,
        'akhir_berlaku'=> '' ,
        'npwp_perusahaan'=> '' ,
        'nomor_surat'=> '' ,
        'tanggal_surat'=> '' ,
        'kantor_bc_ftz'=> '' ,
        'upload_dokumen'=> '' ,
        'status'=> '' ,
    ];


    protected $rules = [
        'fieldColumnMap.users_id' => 'required',
        'fieldColumnMap.nomor_izin_impor' => 'required',
        'fieldColumnMap.perusahaan' => 'required',
        'fieldColumnMap.alamat_perusahaan' => 'required',
        'fieldColumnMap.nomor_izin_bpk' => 'required',
        'fieldColumnMap.tanggal_izin' => 'required',
        'fieldColumnMap.awal_berlaku' => 'required',
        'fieldColumnMap.akhir_berlaku' => 'required',
        'fieldColumnMap.npwp_perusahaan' => 'required',
        'fieldColumnMap.nomor_surat' => 'required',
        'fieldColumnMap.tanggal_surat' => 'required',
        'fieldColumnMap.kantor_bc_ftz' => 'required',
        'fieldColumnMap.upload_dokumen' => 'required',
        'fieldColumnMap.status' => 'required',
    ];

    protected $customAttributes = [
        'fieldColumnMap.users_id' => 'users_id',
        'fieldColumnMap.nomor_izin_impor' => 'nomor_izin_impor',
        'fieldColumnMap.perusahaan' => 'perusahaan',
        'fieldColumnMap.alamat_perusahaan' => 'alamat_perusahaan',
        'fieldColumnMap.nomor_izin_bpk' => 'nomor_izin_bpk',
        'fieldColumnMap.tanggal_izin' => 'tanggal_izin',
        'fieldColumnMap.awal_berlaku' => 'awal_berlaku',
        'fieldColumnMap.akhir_berlaku' => 'akhir_berlaku',
        'fieldColumnMap.npwp_perusahaan' => 'npwp_perusahaan',
        'fieldColumnMap.nomor_surat' => 'nomor_surat',
        'fieldColumnMap.tanggal_surat' => 'tanggal_surat',
        'fieldColumnMap.kantor_bc_ftz' => 'kantor_bc_ftz',
        'fieldColumnMap.upload_dokumen' => 'upload_dokumen',
        'fieldColumnMap.status' => 'status',
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
                
                IzinImporModel::create([
                    'users_id' => Auth::id(),
                    "nomor_izin_impor" => $row['nomor_izin_impor'],
                    "perusahaan" => $row['perusahaan'],
                    "alamat_perusahaan" => $row['alamat_perusahaan'],
                    "nomor_izin_bpk" => $row['nomor_izin_bpk'],
                    "tanggal_izin" => $row['tanggal_izin'],
                    "awal_berlaku" => $row['awal_berlaku'],
                    "akhir_berlaku" => $row['akhir_berlaku'],
                    "npwp_perusahaan" => $row['npwp_perusahaan'],
                    "nomor_surat" => $row['nomor_surat'],
                    "tanggal_surat" => $row['tanggal_surat'],
                    "kantor_bc_ftz" => $row['kantor_bc_ftz'],
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
            'nomor_izin_impor'=> ['nomor_izin_impor'] ,
            'perusahaan'=> ['perusahaan'] ,
            'alamat_perusahaan'=> ['alamat_perusahaan'] ,
            'nomor_izin_bpk'=> ['nomor_izin_bpk'] ,
            'tanggal_izin'=> ['tanggal_izin'] ,
            'awal_berlaku'=> ['awal_berlaku'] ,
            'akhir_berlaku'=> ['akhir_berlaku'] ,
            'npwp_perusahaan'=> ['npwp_perusahaan'] ,
            'nomor_surat'=> ['nomor_surat'] ,
            'tanggal_surat'=> ['tanggal_surat'],
            'kantor_bc_ftz'=> ['kantor_bc_ftz'] ,
            'upload_dokumen'=> ['upload_dokumen'] ,
            'status'=> ['status'],
        ];

        foreach ($this->columns as $column) {
            $match = collect($guesses)->search(fn($options) => in_array(strtolower($column), $options));

            if ($match) $this->fieldColumnMap[$match] = $column;
        }
    }
}
