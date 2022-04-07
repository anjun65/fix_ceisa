<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SuratKuasa as Kuasa;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class SuratKuasa extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'search' => '',
        'status' => '',
        'pemberi-kuasa' => null,
        'penerima-kuasa' => null,
        'date-min' => null,
        'date-max' => null,
    ];
    public Kuasa $editing;
    public $upload;
    public $users_id;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.nomor_kuasa' => 'required',
        'editing.tanggal_kuasa' => 'required',
        'editing.pemberi_kuasa' => 'required',
        'editing.nomor_ijin_bpk' => 'required',
        'editing.tanggal_ijin_bpk' => 'required',
        'editing.penerima_kuasa' => 'required',
        'editing.awal_berlaku' => 'required',
        'editing.akhir_berlaku' => 'required',

        'editing.npwp_pemberi' => 'required',
        'editing.alamat_perusahaan' => 'required',
        'editing.npwp_penerima' => 'required',
        'editing.alamat_perusahaan_penerima' => 'required',
        'editing.kantor_bc_ftz' => 'required',
        'editing.ppftz_dikuasakan' => 'required',
        'editing.upload_dokumen' => 'required',
    ]; }

    public function mount() { 
        $this->users_id = Auth::id();
        $this->editing = $this->makeBlankTransaction(); 
    }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'surat_kuasa.csv');
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
        return Kuasa::make(['date' => now(), 'status' => 'success']);
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

    public function edit(Kuasa $transaction)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($transaction)) $this->editing = $transaction;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->editing->fill([
            'users_id' => Auth::id(),
            'status' => 'Diajukan',
            'upload_dokumen' => $this->upload->store('surat_kuasa'),
        ]);

        $this->editing->save();
        $this->notify('Data Tersimpan');
        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = Kuasa::query()
            ->when($this->filters['status'], fn($query, $status) => $query->where('status', $status))
            ->when($this->filters['pemberi-kuasa'], fn($query, $search_pemberi) => $query->where('pemberi_kuasa', 'like', '%'.$search_pemberi.'%'))
            ->when($this->filters['penerima-kuasa'], fn($query, $search_penerima) => $query->where('penerima_kuasa', 'like', '%'.$search_penerima.'%'))
            ->when($this->filters['date-min'], fn($query, $date) => $query->where('awal_berlaku', '>=', Carbon::parse($date)))
            ->when($this->filters['date-max'], fn($query, $date) => $query->where('akhir_berlaku', '<=', Carbon::parse($date)))
            ->when($this->filters['search'], fn($query, $search) => $query->where('nomor_kuasa', 'like', '%'.$search.'%'))
            ->when($this->users_id, fn($query, $users_id) => $query->where('users_id', $users_id));

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
        return view('livewire.surat-kuasa', [
            'kuasas' => $this->rows,
        ]);
    }
}
