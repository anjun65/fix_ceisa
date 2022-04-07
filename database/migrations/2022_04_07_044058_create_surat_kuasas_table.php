<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKuasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kuasas', function (Blueprint $table) {
            $table->id();

            $table->integer('users_id');
            $table->integer('nomor_kuasa');
            $table->date('tanggal_kuasa');
            $table->string('pemberi_kuasa');
            $table->string('nomor_ijin_bpk');
            $table->date('tanggal_ijin_bpk');
            $table->string('penerima_kuasa');
            $table->date('awal_berlaku');
            $table->date('akhir_berlaku');
            $table->string('npwp_pemberi');
            $table->string('alamat_perusahaan');
            $table->string('npwp_penerima');
            $table->string('alamat_perusahaan_penerima');
            $table->string('kantor_bc_ftz');
            $table->string('ppftz_dikuasakan');
            $table->string('upload_dokumen');
            $table->string('status');

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
        Schema::dropIfExists('surat_kuasas');
    }
}
