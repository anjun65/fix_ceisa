<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpftzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppftzs', function (Blueprint $table) {
            $table->id();
            $table->integer("users_id");
            $table->string("pengajuan_sebagai");
            $table->string("jenis_pemberitahuan");
            $table->string("jenis_pemberitahuan_lanjut");
            $table->string("nomor_aju_pabean");
            $table->string("kategori_pemberitahuan")->nullable();
            $table->string("kantor_aju_pabean")->nullable();
            $table->string("kategori_pemasukan")->nullable();
            $table->string("tujuan_pemasukan")->nullable();
            $table->string("asal_barang")->nullable();
            $table->string("jenis_faktur")->nullable();
            $table->string("jenis_identitas_pengirim")->nullable();
            $table->string("nomor_identitas_pengirim")->nullable();
            $table->string("nama_pengirim")->nullable();
            $table->string("alamat_pengirim")->nullable();
            $table->string("jenis_identitas_penerima")->nullable();
            $table->string("nomor_identitas_penerima")->nullable();
            $table->string("nama_penerima")->nullable();
            $table->string("alamat_penerima")->nullable();
            $table->string("nomor_ijin_bpk_penerima")->nullable();
            $table->string("npwp_ppjk")->nullable();
            $table->string("nama_ppjk")->nullable();
            $table->string("alamat_ppjk")->nullable();
            $table->string("nilai_barang")->nullable();
            $table->string("nilai_bc11")->nullable();
            $table->date("tanggal_bc11")->nullable();
            $table->string("pos_bc11")->nullable();
            $table->string("subpos_bc11")->nullable();
            $table->string("subsubpos_bc11")->nullable();
            $table->string("cara_angkut")->nullable();
            $table->string("nama_angkut")->nullable();
            $table->string("bendera")->nullable();
            $table->string("nomor_voy_flight_pol")->nullable();
            $table->string("pelabuhan_muat")->nullable();
            $table->string("pelabuhan_tujuan")->nullable();
            $table->string("pelabuhan_transit")->nullable();
            $table->integer("berat_bersih")->nullable();
            $table->integer("berat_kotor")->nullable();
            $table->integer("volume")->nullable();
            $table->date("perkiraan_tanggal_pemasukan")->nullable();
            $table->integer("jumlah_jenis_kemasan")->nullable();
            $table->integer("jumlah_peti_kemas")->nullable();
            $table->integer("jumlah_jenis_barang")->nullable();
            $table->string("tempat_penimbunan")->nullable();
            $table->string("status")->nullable();
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
        Schema::dropIfExists('ppftzs');
    }
}
