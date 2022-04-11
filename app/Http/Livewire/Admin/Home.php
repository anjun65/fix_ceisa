<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Home as HomeModel;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'items' => HomeModel::all(),
        ])->layout('layouts.admin');
    }
}
