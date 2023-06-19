<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPpftzDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ppftz_details', function (Blueprint $table) {
            $table->string('negara_penjual')->nullable();
            $table->string('jenis_identitas_pembeli')->nullable();
            $table->string('nomor_identitas_pembeli')->nullable();
            $table->string('nama_pembeli')->nullable();
            $table->string('alamat_pembeli')->nullable();
            $table->string('negara_pembeli')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ppftz_details', function (Blueprint $table) {
            //
        });
    }
}
