<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinImporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin_impors', function (Blueprint $table) {
            $table->id();

            $table->integer('users_id');
            $table->string('nomor_izin_impor');
            $table->string('perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('nomor_izin_bpk');
            $table->date('tanggal_izin');
            $table->date('awal_berlaku');
            $table->date('akhir_berlaku');
        
            $table->string('npwp_perusahaan');
            $table->string('nomor_surat');
            $table->string('tanggal_surat');
            $table->string('kantor_bc_ftz');
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
        Schema::dropIfExists('izin_impors');
    }
}
