<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Home as HomeModel;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'items' => HomeModel::all(),
        ])->layout('layouts.admin');
    }
}
