<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DataKemasan as DataKemasanModel;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Livewire\WithFileUploads;
use Auth;


class DataKemasan extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'search' => '',
    ];

    public $nomor;
    public DataKemasanModel $editing;
    public $upload;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.jumlah' => 'required',
        'editing.jenis' => 'required',
        'editing.merk' => 'required',
    ]; }

    public function mount($nomor_aju_pabean) { 
        $this->nomor = $nomor_aju_pabean;
        $this->editing = $this->makeBlankTransaction();
    }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'izin_impor.csv');
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
        return DataKemasanModel::make(['date' => now(), 'status' => 'success']);
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

    public function edit(DataKemasanModel $transaction)
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
        ]);

        $this->emitSelf('notify-saved');

        $this->editing->save();
        
        $this->notify('Data Tersimpan');

        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = DataKemasanModel::query()
            ->when($this->filters['search'], fn($query, $search) => $query->where('nomor', $search ))
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
        return view('livewire.data-kemasan', [
            'items' => $this->rows,
            'nomor_aju_pabean' => $this->nomor,
        ]);
    }
}
