<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCifToPpftzDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ppftz_details', function (Blueprint $table) {
            $table->after('transaksi_fob', function (Blueprint $table) {
                $table->string('transaksi_cif');
                $table->string('transaksi_voluntary');
            });
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
