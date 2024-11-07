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
                $table->string('tipe')->nullable();
                $table->string('ukuran')->nullable();
                $table->string('spesifikasi_lain')->nullable();
                $table->string('kode_barang')->nullable();
                $table->string('asal_barang')->nullable();
                $table->string('jenis_satuan')->nullable();
                $table->string('jumlah_kemasan')->nullable();
                $table->string('jenis_kemasan')->nullable();
                $table->string('neto')->nullable();
                $table->string('volume')->nullable();
                $table->string('harga_ekspor')->nullable();
                $table->string('fob')->nullable();
                $table->string('is_lartas')->nullable();
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
