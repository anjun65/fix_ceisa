<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DataDokumen as DataDokumenModel;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Livewire\WithFileUploads;

class DataDokumen extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'search' => '',
        'nomor_pengajuan_dokumen' => '',
    ];

    public $users_id;
    public DataDokumenModel $editing;
    public $upload;
    public $nomor;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.seri' => 'required',
        'editing.jenis_dokumen' => 'required',
        'editing.nomor_dokumen' => 'required',
        'editing.tanggal_dokumen' => 'required',
    ]; }

    public function mount($nomor_aju_pabean) {
        $this->nomor= $nomor_aju_pabean;
        $this->editing = $this->makeBlankTransaction();
    }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'data_dokumen_pabean.csv');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('Anda telah menghapus '.$deleteCount.' data.');
    }

    public function makeBlankTransaction()
    {
        return DataDokumenModel::make(['date' => now(), 'status' => 'success']);
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

    public function edit(DataDokumenModel $transaction)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($transaction)) $this->editing = $transaction;

        $this->showEditModal = true;
    }

    public function save()
    {
        
        $this->validate();

        $this->editing->fill([
            'nomor_pengajuan_dokumen' => $this->nomor,
            'file' => $this->upload->store('data_dokumen'),
        ]);


        $this->editing->save();
        
        $this->notify('Data Tersimpan');

        $this->showEditModal = false;
    }

    public function getRowsQueryProperty()
    {
        $query = DataDokumenModel::query()
            ->when($this->users_id, fn($query, $users_id) => $query->where('users_id', $users_id))
            ->when($this->filters['search'], fn($query, $search) => $query->where('seri', 'like', '%'.$search.'%'))
            ->when($this->nomor, fn($query, $nomor_pengajuan_dokumen) => $query->where('nomor_pengajuan_dokumen', $nomor_pengajuan_dokumen));

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
        return view('livewire.data-dokumen', [
            'items' => $this->rows,
            'nomor_aju_pabean' => $this->nomor,
        ]);
    }
}
