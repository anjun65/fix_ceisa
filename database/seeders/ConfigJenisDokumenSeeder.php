<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigJenisDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('config_jenis_dokumens')->delete();

		$codes = array(
			array('code' => '217', 'name' => 'PACKING LIST'),
            array('code' => '380', 'name' => 'INVOICE'),
            array('code' => '705', 'name' => 'B/L'),
            array('code' => '740', 'name' => 'AWB'),
            array('code' => '03001', 'name' => 'Izin Prinsip Pendirian Kawasan Berikat Sebelum  Fisik Bangunan Berdiri'),
            array('code' => '03002', 'name' => 'Keputusan Penetapan Tempat Sebagai Kawasan  Berikat Dan Pemberian Izin Penyelenggara Kawasan Berikat'),
            array('code' => '03003', 'name' => 'Persetujuan Penetapan Tempat Sebagai Kawasan    Berikat Dan Pemberian Izin Penyelenggara Kawasan Berikat Sekaligus Izin Pengusaha Kawasan  Berikat'),
            array('code' => '03004', 'name' => 'Izin PDKB'),
            array('code' => '03005', 'name' => 'Perpanjangan Penetapan Tempat Sebagai Kawasan   Berikat Dan Izin Penyelenggara Kawasan Berikat, Izin Pengusaha Kawasan Berikat, Atau Izin     PDKB Sebelum Jangka Waktu Izin Tersebut Berakhir'),
            array('code' => '03006', 'name' =>'Perubahan Izin Penyelenggara Kawasan Berikat,   Izin Pengusaha Kawasan Berikat, Atau Izin PDKB (Terdapat Perubahan Nama Perusahaan Yang   Bukan Dikarenakan Merger Atau Diakuisisi, Jenis Hasil Produksi, Atau Luas Kawasan Berikat)'),
            array('code' => '03007', 'name' => 'Perubahan Keputusan Izin Penyelenggara Kawasan  Berikat, Izin Pengusaha Kawasan Berikat, Atau Izin PDKB'),
            array('code' => '03008', 'name' => 'Pemberian Izin Penambahan Pintu Khusus Pemasukan    Dan Pengeluaran Barang Di Kawasan Berikat '),
            array('code' => '03009', 'name' => 'Pemberian Izin Penambahan Pintu Khusus Orang Di     Kawasan Berikat '),
            array('code' => '03010', 'name' => 'Persetujuan Pemasukan Barang Dari Kawasan Bebas     Ke Kawasan Berikat '),
            array('code' => '03011', 'name' => 'Persetujuan Pemasukan Barang Modal Dari Luar    Daerah Pabean '),
            array('code' => '03012', 'name' => 'Persetujuan Pemasukan Barang Modal Dari Kawasan     Berikat Lain '),
            array('code' => '03013', 'name' => 'Persetujuan Pemasukan Barang Jadi Asal Luar     Daerah Pabean Untuk Digabungkan Dengan Hasil Produksi Utama Kawasan Berikat '),
            array('code' => '03014', 'name' => 'Persetujuan Pemasukan Peralatan Perkantoran Asal    Luar Daerah Pabean Ke Kawasan Berikat '),
            array('code' => '03015', 'name' =>  'Persetujuan Pemasukan Barang Contoh Asal Luar   Daerah Pabean '),
            array('code' => '03016', 'name' =>  'Persetujuan Pembebasan Bea Masuk Untuk Barang   Contoh Yang Akan Dikeluarkan Ke Tempat Lain Dalam Daerah Pabean '),
            array('code' => '03017', 'name' =>  'Persetujuan Mengeluarkan Hasil Produksi Kawasan     Berikat Ke Tempat Penyelenggaraan Pameran Berikat (TPPB) '),
            array('code' => '03018', 'name' => 'Persetujuan Untuk Mengeluarkan Bahan Baku Dan/  Atau Bahan Rusak Dan/Atau Apkir (Reject) Yang Sama Sekali Tidak Diproses Ke Gudang Berikat    Asal Barang '),
            array('code' => '03019', 'name' => 'Persetujuan Untuk Mengeluarkan Barang Dan/Atau  Bahan Rusak Dan/Atau Apkir (Reject) Asal Tlddp Ke TLDDP '),
            array('code' => '03020', 'name' => 'Persetujuan Pengeluaran Bahan Baku/Sisa Bahan   Baku Asal Impor Untuk Direekspor '),
            array('code' => '03021', 'name' => 'Persetujuan Pengeluaran Bahan Baku Dan/Atau Sisa    Bahan Baku Asal Luar Daerah Pabean Ke Kawasan Berikat Lain '),
            array('code' => '03022', 'name' => 'Persetujuan Pengeluaran Bahan Baku Dan/Atau Sisa    Bahan Baku Asal Luar Daerah Pabean Ke Perusahaan Industri Di TLDDP '),
            array('code' => '03023', 'name' => 'Persetujuan Pemindahtanganan Barang Selain Hasil    Produksi Dalam Rangka Saling Melengkapi Kebutuhan Dalam Proses Produksi Atau Peningkatan   Produksi Ke Kawasan Berikat Lain Dalam Satu Manajemen '),
            array('code' => '03024', 'name' => 'Persetujuan Pemindahtanganan Barang Selain Hasil    Produksi Dalam Rangka Saling Melengkapi Kebutuhan Dalam Proses Produksi Atau Peningkatan   Produksi Ke Kawasan Berikat Lain Dalam Satu PKB '),
            array('code' => '03025', 'name' =>  'Persetujuan Pemindahtanganan Barang Selain Hasil    Produksi Dalam Rangka Saling Melengkapi Kebutuhan Dalam Proses Produksi Atau Peningkatan   Produksi Ke Kawasan Berikat Lainnya '),
            array('code' => '03026', 'name' => 'Persetujuan Pengeluaran Barang Modal Asal Impor     Yang Belum Dibayar BM-nya Untuk Direekspor'),
            array('code' => '03027', 'name' => 'Persetujuan Pengeluaran Barang Modal Asal Impor     Yang Belum Diselesaikan Kewajiban BM-nya Ke Kawasan Berikat Lain Setelah Jangka Waktu 2     (Dua) Tahun Sejak Diimpor Dan Telahdipergunakan Di Kawasan Berikat '),
            array('code' => '03028', 'name' => 'Persetujuan Pengeluaran Barang Modal Asal Impor     Yang Belum Diselesaikan Kewajiban BM Ke Tempat Lain Dalam Daerah Pabean Sebelum Jangka  Waktu 4 (Empat) Tahun Sejak Diimpor, Dan Telah Dipergunakan Di Kawasan Berikat'),
            array('code' => '03029', 'name' => 'Keputusan Pembebasan BM Atas Pengeluaran Barang     Modal Asal Impor Yang Belum Diselesaikan Kewajiban Pembayaran Bm Ke TLDDP Setelah Jangka    Waktu 4 (Empat) Tahun Sejak Diimpor, Dan Telah Dipergunakan Di Kawasan Berikat'),
            array('code' => '03030', 'name' => ' Persetujuan Pengeluaran Peralatan Perkantoran   Asal Impor Yang Belum Lunas BM Untuk Direekspor'),
            array('code' => '03031', 'name' => 'Persetujuan Pengeluaran Peralatan Perkantoran   Asal Impor Yang Belum Diselesaikan Kewajiban Pembayaran Bm Ke Kawasan Berikat Lain Setelah    Dipergunakan Di Kawasan Berikat'), 
            array('code' => '03032', 'name' => 'Persetujuan Pengeluaran Peralatan Perkantoran   Asal Impor Yang Belum Diselesaikan Kewajiban Pembayaran Bm Ke TLDDP Sebelum Jangka Waktu 4    (Empat) Tahun Sejak Diimpor, Dan Telah Dipergunakan Di Kawasan Berikat Yang Bersangkutan'), 
            array('code' => '03033', 'name' => 'Persetujuan Pengeluaran Peralatan Perkantoran   Asal Impor Yang Belum Diselesaikan Kewajiban Pembayaran Bm Ke TLDDP Setelah Jangka Waktu 4    (Empat) Tahun Sejak Diimpor, Dan Telah Dipergunakan Di Kawasan Berikat'), 
            array('code' => '03034', 'name' => 'Persetujuan Untuk Memindahtangankan Barang Modal    Dan/Atau Peralatan Perkantoran Yang Telah Dilunasi BM Dan PDRI Pada Saat Pemasukan Ke  Kawasan Berikat'), 
            array('code' => '03035', 'name' => ' Persetujuan Untuk Memindahtangankan Barang Modal    Asal Tempat Lain Dalam Daerah Pabean'), 
            array('code' => '03036', 'name' => 'Persetujuan Pengeluaran Barang Modal Untuk  Perbaikan/Reparasi Ke Luar Daerah Pabean'), 
            array('code' => '03037', 'name' => 'Persetujuan Pengeluaran Barang Modal Untuk  Perbaikan/Reparasi Ke TLDDP'), 
            array('code' => '03038', 'name' => 'Persetujuan Pengeluaran Barang Modal Untuk  Perbaikan/Reparasi Ke KB Lain'),
            array('code' => '03039', 'name' => 'Persetujuan Subkontrak Kurang Dari 60 (Enam     Puluh) Hari Ke TLDDP'), 
            array('code' => '03040', 'name' => 'Persetujuan Subkontrak Kurang Dari 60 (Enam     Puluh) Hari Ke KB Lain'),
            array('code' => '03041', 'name' => 'Persetujuan Subkontrak Lebih Dari 60 (Enam Puluh)   Hari Ke TLDDP'), 
            array('code' => '03042', 'name' => 'Persetujuan Subkontrak Lebih Dari 60 (Enam Puluh)   Hari Ke PDKB Lain'),
            array('code' => '03043', 'name' => 'Persetujuan Meminjamkan Mesin/Cetakan (Moulding)    Ke KB Lain Dalam Rangka Subkontrak'), 
            array('code' => '03044', 'name' => 'Persetujuan Meminjamkan Mesin/Cetakan (Moulding)    Ke KB Lain Bukan Dalam Rangka Subkontrak'), 
            array('code' => '03045', 'name' => 'Persetujuan Meminjamkan Mesin/Cetakan (Moulding)    Ke TLDDP Dalam Rangka Subkontrak'), 
            array('code' => '03046', 'name' => 'Persetujuan Meminjamkan Mesin/Cetakan (Moulding)    Ke TLDDP Bukan Dalam Rangka Subkontrak'), 
            array('code' => '03047', 'name' => 'Persetujuan Perpanjangan Meminjamkan Mesin Dan/ Atau Cetakan (Moulding) Ke PDKB Lain Dalam Rangka Subkontrak'), 
            array('code' => '03048', 'name' => 'Persetujuan Perpanjangan Meminjamkan Mesin Dan/ Atau Cetakan (Moulding) Ke PDKB Lain Bukan Dalam Rangka Subkontrak'), 
            array('code' => '03049', 'name' => 'Persetujuan Perpanjangan Meminjamkan Mesin Dan/ Atau Cetakan (Moulding) Ke TLDDP Dalam Rangka Subkontrak'), 
            array('code' => '03050', 'name' => 'Persetujuan Perpanjangan Meminjamkan Mesin Dan/ Atau Cetakan (Moulding) Ke TLDDP Selain Dalam Rangka Subkontrak'), 
            array('code' => '03051', 'name' => 'Persetujuan Peminjaman Mesin Atau Cetakan   (Moulding) Yang Melebihi Jangka Waktu'), 
            array('code' => '03052', 'name' => 'Persetujuan Pemusnahan Atas Barangbarang Yang   Busuk Dan/Atau Yang Karena Sifat Dan Bentuknya Dapat Dimusnahkan'), 
            array('code' => '03053', 'name' => 'Persetujuan Perusakan Atas Barang Asal Luar     Daerah Pabean Yang Karena Sifat Dan Bentuknya Tidak Dapat Dimusnahkan'), 
            array('code' => '03054', 'name' => 'Persetujuan Menerima Subkontrak Dari TLDDP'), 
            array('code' => '03055', 'name' => 'Persetujuan Peminjaman Mesin/Cetakan (Moulding)     Dari TLDDP Dalam Rangka Subkontrak'),
            array('code' => '03056', 'name' => 'Persetujuan Peminjaman Mesin/Cetakan (Moulding)     Dari TLDDP Bukan Dalam Rangka Subkontrak'), 
            array('code' => '03057', 'name' => 'Persetujuan Peminjaman Mesin/Peralatan Pabrik   Dari TLDDP'),
            array('code' => '03060', 'name' => 'Persetujuan Pemasukan Barang Modal Berupa   Peralatan Pabrik Dari Luar Daerah Pabean'),
            array('code' => '03061', 'name' => 'Persetujuan Pemasukan Barang Modal Berupa Suku  Cadang Dari Luar Daerah Pabean Yang Dimasukkan Tidak Bersamaan Dengan Barang Modal'),
            array('code' => '03062', 'name' => 'Persetujuan Pemasukan Kembali (Reimpor) Barang  Hasil Produksi Asal TPB'),
            array('code' => '03063', 'name' => 'Persetujuan Pemasukan Kembali (Reimpor) Barang  Modal Setelah Perbaikan/Reparasi Dari Luar Daerah Pabean'),
            array('code' => '03064', 'name' => 'Persetujuan Perpanjangan Jangka Waktu Pengeluaran   Barang Modal Keperluan Perbaikan/Reparasi Tujuan TLDDP'),
            array('code' => '03065', 'name' => 'Persetujuan Pengeluaran Barang Contoh/Sampel KB     Dengan Tujuan TLDDP'),
            array('code' => '03066', 'name' => 'Rekomendasi Meminjamkan Barang Modal  Ke TLDDP  Dalam Rangka Subkontrak Atau Bukan Lebih Dari 6  Bulan'),
            array('code' => '065', 'name' => 'BC 1.1 KONSOLIDASI PJT'),
            array('code' => '10', 'name' => 'RKSP'),
            array('code' => '11', 'name' => 'MANIFES'),
            array('code' => '16', 'name' => 'BC 16'),
            array('code' => '161', 'name' => 'PPB PLB'),
            array('code' => '20', 'name' => 'PIB/IMPOR'),
            array('code' => '21', 'name' => 'PIBK/IMPOR KHUSUS'),
            array('code' => '23', 'name' => 'BC 23'),
            array('code' => '25', 'name' => 'BC 25'),
            array('code' => '261', 'name' => 'BC 261'),
            array('code' => '262', 'name' => 'BC 262'),
            array('code' => '27', 'name' => 'BC 27'),
            array('code' => '28', 'name' => 'BC 28'),
            array('code' => '281', 'name' => 'BC 28 PENGELUARAN DENGAN DOKAP'), 
            array('code' => '282', 'name' => 'PPK PLB'), 
            array('code' => '30', 'name' => 'PEB/EKSPOR'), 
            array('code' => '315', 'name' => 'KONTRAK'), 
            array('code' => '343', 'name' => 'SHIPING ORDER'), 
            array('code' => '383', 'name' => 'SSTB'), 
            array('code' => '388', 'name' => 'FAKTUR PAJAK'), 
            array('code' => '40', 'name' => 'BC 40'), 
            array('code' => '41', 'name' => 'BC 41'), 
            array('code' => '410', 'name' => 'SURAT SANGGUP BAYAR / SSB'), 
            array('code' => '430', 'name' => 'BANK GARANSI'), 
            array('code' => '440', 'name' => 'SURAT TANDA BUKTI SETOR / STBS'), 
            array('code' => '454', 'name' => 'SSPCP'), 
            array('code' => '456', 'name' => 'SKB'), 
            array('code' => '457', 'name' => 'Surat Keterangan Bebas (SKB) PPh'), 
            array('code' => '458', 'name' => 'SKTD PPN'), 
            array('code' => '460', 'name' => 'Surat Keterangan / SKB PP23'), 
            array('code' => '465', 'name' => 'L/C'), 
            array('code' => '51', 'name' => 'FTZ 01'), 
            array('code' => '52', 'name' => 'FTZ 02'), 
            array('code' => '53', 'name' => 'FTZ 03'), 
            array('code' => '640', 'name' => 'DELIVERY ORDER'), 
            array('code' => '666', 'name' => 'Pengecualian Dengan Surat Keputusan'), 
            array('code' => '704', 'name' => 'MASTER B/L'), 
            array('code' => '741', 'name' => 'MASTER AWB'), 
            array('code' => '800', 'name' => 'SERTIFIKAT ALAT PERANGKAT TELEKOM/POSTEL'), 
            array('code' => '803', 'name' => 'SATS LN / DEPHUT'), 
            array('code' => '805', 'name' => 'REGISTRASI B3 / KLH'), 
            array('code' => '808', 'name' => 'IJIN IMPOR / POLRI'), 
            array('code' => '810', 'name' => 'SM/SPM'), 
            array('code' => '811', 'name' => 'SIE'), 
            array('code' => '813', 'name' => 'DOK. CUKAI (CK)'), 
            array('code' => '814', 'name' => 'SKEP IJIN EKSPOR BERKALA'), 
            array('code' => '815', 'name' => 'SKEP IJIN TATA NIAGA EKSPOR'), 
            array('code' => '816', 'name' => 'DOK. EKSPOR (PEB)'), 
            array('code' => '820', 'name' => 'Persetujuan Ekspor (PE)'),
            array('code' => '834', 'name' => 'SNI GULA KRISTAL MENTAH  / DEPTAN'), 
            array('code' => '835', 'name' => 'IZIN DAN/ATAU PENDAFT PESTISIDA / DEPTAN'), 
            array('code' => '836', 'name' => 'IZIN IMPOR  / DEPTAN'), 
            array('code' => '842', 'name' => 'SNI / ESDM'), 
            array('code' => '843', 'name' => 'NOMOR PELUMAS TERDAFTAR / ESDM'), 
            array('code' => '844', 'name' => 'IJIN USAHA NIAGA/IU NIAGA TERBATAS/ESDM'), 
            array('code' => '845', 'name' => 'REKOMENDASI IMPOR PELUMAS'), 
            array('code' => '851', 'name' => 'SURAT IJIN KARANTINA TANAMAN'), 
            array('code' => '853', 'name' => 'SURAT IJIN KARANTINA HEWAN / IKAN'), 
            array('code' => '854', 'name' => 'SURAT PERSETUJUAN MUAT BPOM'), 
            array('code' => '856', 'name' => 'LAP. PEMERIKSAAN SURVEYOR (LPS-E)'), 
            array('code' => '857', 'name' => 'FUMIGATION CERTIFICATE'), 
            array('code' => '858', 'name' => 'CITES CERTIFICATE'), 
            array('code' => '860', 'name' => 'ELECTRONIC CERTIFICATE OF ORIGIN (E-CO)'), 
            array('code' => '861', 'name' => 'CERTIFICATE OF ORIGIN (CO)'), 
            array('code' => '871', 'name' => 'Nomor Pendaftaran Alat Kesehatan/Depkes'), 
            array('code' => '872', 'name' => 'LAPORAN SURVEYOR DEPKES'), 
            array('code' => '873', 'name' => 'IP (NARKTK, PREKURSOR &amp; PSIKOTR)/DEPKES'), 
            array('code' => '874', 'name' => 'IT (PREKURSOR &amp; PSIKOTR)/DEPKES'), 
            array('code' => '875', 'name' => 'SPI (NARKTK, PREKURSOR &amp; PSIKOTR)/DEPKES'), 
            array('code' => '876', 'name' => 'Ijin Pembawaan UKA'), 
            array('code' => '877', 'name' => 'Ijin Persetujuan Pembawaan UKA'), 
            array('code' => '878', 'name' => 'Ijin Pelaporan Pembawaan UKA'), 
            array('code' => '888', 'name' => 'PENGECUALIAN PERIJINAN'), 
            array('code' => '9001', 'name' => 'Master List'), 
            array('code' => '902', 'name' => 'IJIN BAPETEN'), 
            array('code' => '911', 'name' => 'SURAT KEPUTUSAN'), 
            array('code' => '912', 'name' => 'SKEP FASILITAS BKPM'), 
            array('code' => '913', 'name' => 'SKEP FASILITAS PERTAMBANGAN'), 
            array('code' => '917', 'name' => 'BPBC'), 
            array('code' => '918', 'name' => 'SK LABEL BAHASA INDONESIA'), 
            array('code' => '942', 'name' => 'IZIN IMPOR KARANTINA TUMBUHAN'), 
            array('code' => '943', 'name' => 'KH-5 / IZIN IMPOR KARANTINA HEWAN'), 
            array('code' => '944', 'name' => 'KH-7 / IZIN IMPOR KARANTINA HEWAN'), 
            array('code' => '945', 'name' => 'KH-12 / IZIN IMPOR KARANTINA HEWAN'), 
            array('code' => '946', 'name' => 'KID-3 / IZIN IMPOR KARANTINA IKAN'), 
            array('code' => '947', 'name' => 'KID-15 / IZIN IMPOR KARANTINA IKAN'), 
            array('code' => '948', 'name' => 'NPIK'), 
            array('code' => '949', 'name' => 'PENGAKUAN SBG IMPORTIR PRODUSEN'), 
            array('code' => '950', 'name' => 'KID-4/IZIN KARANTINA IKAN'), 
            array('code' => '951', 'name' => 'HC (HEALTH CERTIFICATE)'), 
            array('code' => '956', 'name' => 'PENGAKUAN SBG IMPORTIR TERDAFTAR'), 
            array('code' => '957', 'name' => 'SNI/SPB/DEPDAG'), 
            array('code' => '958', 'name' => 'LAPORAN SURVEYOR / DEPDAG'), 
            array('code' => '959', 'name' => 'SURAT PERSETUJUAN IMPOR DEP.DAG'), 
            array('code' => '960', 'name' => '3D/PC dan/atau PFP'), 
            array('code' => '961', 'name' => 'Hasil Lab'), 
            array('code' => '993', 'name' => 'SURAT IJIN MENTERI PERTANIAN'), 
            array('code' => '994', 'name' => 'BUKTI PENERIMAAN JAMINAN (BPJ)'), 
            array('code' => '995', 'name' => 'STBS / SSP-E (PAJAK EKSPOR)'), 
            array('code' => '996', 'name' => 'SRT SANGGUP BAYAR (SSB)'), 
            array('code' => '997', 'name' => 'COSTOMS BOND / STTJ'), 
            array('code' => '998', 'name' => 'SKEP FASILITAS KEMUDAHAN EKSPOR'), 
            array('code' => '999', 'name' => 'LAINNYA'),
		);

		DB::table('config_jenis_dokumens')->insert($codes);

          
    }
}