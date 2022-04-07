<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Home as HomeModel;

class Home extends Component
{
    public function render()
    {
        $currentURL = Request::url();

        if ($currentURL == "http://ilo.test/admin"){
            return view('livewire.home', [
                'items' => HomeModel::all(),
            ])->layout('layouts.admin');;
        } else {
            return view('livewire.home', [
                'items' => HomeModel::all(),
            ]);
        }
        
    }
}
