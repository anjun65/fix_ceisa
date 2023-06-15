<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpftzDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppftz_details', function (Blueprint $table) {
            $table->id();
            $table->integer('ppftz_id');
            $table->string('serah_barang')->nullable();
            $table->string('cara_bayar')->nullable();
            $table->string('ijin_bpk_pengirim')->nullable();
            $table->string('tanggal_ijin_bpk_pengirim')->nullable();
            $table->string('negara_penerima')->nullable();
            $table->string('jenis_identitas_penjual')->nullable();
            $table->string('nomor_identitas_penjual')->nullable();
            $table->string('nama_penjual')->nullable();
            $table->string('alamat_penjual')->nullable();
            $table->string('negara_tujuan')->nullable();
            $table->string('transaksi')->nullable();
            $table->string('transaksi_valuta')->nullable();
            $table->string('transaksi_kurs')->nullable();
            $table->string('transaksi_fob')->nullable();
            $table->string('transaksi_freight')->nullable();
            $table->string('jenis_asuransi')->nullable();
            $table->string('transaksi_asuransi')->nullable();
            $table->string('transaksi_maklon')->nullable();
            $table->string('transaksi_sawit')->nullable();
            $table->string('transaksi_curah')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppftz_details');
    }
}
