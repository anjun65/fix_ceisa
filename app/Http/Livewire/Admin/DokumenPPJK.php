<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ppftz as ppftzmodel;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Illuminate\Support\Facades\Auth;

class DokumenPPJK extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'nomor_aju_pabean' => '',
        'status' => '',
        'penerima' => '',
        'pengirim' => '',
        'jenis-pemberitahuan' => '',
    ];
    public ppftzmodel $editing;
    public $lagi_edit = '';
    public $users_id;
    public $pengajuan_sebagai = 'PPJK';

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.pengajuan_sebagai' => 'required',
        'editing.kantor_aju_pabean' => 'required',
        'editing.jenis_pemberitahuan' => 'required',
        'editing.jenis_pemberitahuan_lanjut' => 'required',
    ]; }

    public function mount() { 
        $this->editing = $this->makeBlankTransaction(); 
    }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'DokumenPabean.csv');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('You\'ve deleted '.$deleteCount.' Document');
    }

    public function makeBlankTransaction()
    {
        return ppftzmodel::make();
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) $this->editing = $this->makeBlankTransaction();

        $this->showEditModal = true;
    }

    public function lihat(ppftzmodel $pabean)
    {
        return redirect()->route('edit-pabean', $pabean->nomor_aju_pabean);
    }


    public function edit(ppftzmodel $pabean)
    {
        $this->useCachedRows();
        if ($this->editing->isNot($pabean)) $this->editing = $pabean;
        $this->showEditModal = true;
    }

    public function save()
    {
        $this->editing->fill([
            'status' => 'Disetujui',
        ]);

        $this->editing->save();
        $this->notify('Data Berhasil Disetujui');
        $this->showEditModal = false;
    }

    public function rejected($id)
    {
        $items = ppftzmodel::findorFail($id);
        $items->update(array('status' => 'Ditolak'));
        
        $this->notify('Data berhasil ditolak');
        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = ppftzmodel::query()
            ->when($this->pengajuan_sebagai, fn($query, $pengajuan_sebagai) => $query->where('pengajuan_sebagai', 'PPJK'))
            ->when($this->filters['nomor_aju_pabean'], fn($query, $nomor_aju_pabean) => $query->where('nomor_aju_pabean', 'like', '%'.$nomor_aju_pabean.'%'))
            ->when($this->filters['pengirim'], fn($query, $nama_pengirim) => $query->where('nama_pengirim', 'like', '%'.$nama_pengirim.'%'))
            ->when($this->filters['penerima'], fn($query, $nama_penerima) => $query->where('nama_penerima', 'like', '%'.$nama_penerima.'%'))
            ->when($this->filters['status'], fn($query, $status) => $query->where('status', $status))
            ->when($this->filters['jenis-pemberitahuan'], fn($query, $jenis_pemberitahuan) => $query->where('jenis_pemberitahuan', 'like', '%'.$jenis_pemberitahuan.'%'));
            

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('livewire.admin.ppftz', [
            'items' => $this->rows,
        ])->layout('layouts.admin');;
    }
}
