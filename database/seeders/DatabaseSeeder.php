<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'hajrul@polibatam.ac.id',
            'nomorInduk' => '4311501034',
            'username' => 'hajrul',
            'name' => 'Hajrul Khaira',
            'roles' => 'ADMIN',
        ]);

        $this->call([
            CountrySeeder::class,
            CurrencySeeder::class,
            DocumentCodes::class,
            ListPelabuhan::class,
            CaraPengangkutan::class,
        ]);
    }
}
