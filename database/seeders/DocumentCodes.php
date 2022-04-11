<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentCodes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_document_codes')->delete();

		$codes = array(
			array('name' => 'BC 1.1'),
			array('name' => 'BC 1.2'),
			array('name' => 'BC 1.4'),
		);

		DB::table('config_document_codes')->insert($codes);
    }
}
