<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToDataBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_barangs', function (Blueprint $table) {


            $table->after('bruto', function (Blueprint $table) {
                $table->string('tipe');
                $table->string('ukuran');
                $table->string('spesifikasi_lain');
                $table->string('kode_barang');
                $table->string('asal_barang');
                $table->string('jenis_satuan');
                $table->string('jumlah_kemasan');
                $table->string('jenis_kemasan');
                $table->string('neto');
                $table->string('volume');
                $table->string('harga_ekspor');
                $table->string('fob');
                $table->string('is_lartas');
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
        Schema::table('data_barangs', function (Blueprint $table) {
            //
        });
    }
}
