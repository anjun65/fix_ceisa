<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PPFTZ Impor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>

        .page-break {
            page-break-after: always;
            /* depreciating, use break-after */
            break-after: page;
            height: 0px;
            display: block !important;
        }
    </style>
</head>

<body style="font-size: 9px">
    
    <table width=100%>
        <thead>
            <tr>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
                <td width=10%></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" style="text-align: center;border:1px solid black;"><img src="img/logo-poltek.png" class="w-auto"
                        style="height: 60px;padding-top:1rem;padding-bottom:1rem;"></td>
                <td colspan="6" class="text-center p-2"
                    style="border:1px solid black;vertical-align: middle;">PEMBERITAHUAN PABEAN<br/>FREE TRADE ZONE</td>
            
                <td colspan="2" class="font-weight-bold" style="border:1px solid black;vertical-align: middle;text-align: center;">PPFTZ-01</td>
            </tr>
            <tr>
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>A. NOMOR DAN TANGGAL PEMBERITAHUAN</u>
                </td>

                <td colspan="5" style="border-left:1px solid black" style="border-right:1px solid black;border-left:1px solid black">
                    
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Nomor Pengajuan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{  $item->nomor_aju_pabean }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    3. Nomor Pendaftaran
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{  $item->id }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    2. Tanggal Pengajuan
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    : {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y');  }}
                    
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    4. Tanggal Pendaftaran
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    : {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y');  }}
                </td>
            </tr>

            <tr>
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>B. DOKUMEN</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>C. KANTOR PABEAN</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Jenis Pemberitahuan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : PPFTZ-01
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Kantor Pabean Asal
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->kantor_aju_pabean }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Kategori Pemberitahuan
                </td>

                <td colspan="3" style="">
                    : {{ $item->kategori_pemberitahuan }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Kantor Pabean Tujuan
                </td>

                <td colspan="3" style="border-right:1px solid black;">
                    : 
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    3. Pemberitahuan Asal
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    : Dipergunakan
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    
                </td>
            </tr>

            <tr>
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>D. PEMASUKAN</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>E. PENGELUARAN</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Jenis Pemasukan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if ($item->jenis_pemberitahuan == "Pemasukan") {{ $item->jenis_pemberitahuan_lanjut }} @endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Jenis Pengeluaran
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : @if ($item->jenis_pemberitahuan == "Pengeluaran") {{ $item->jenis_pemberitahuan_lanjut }} @endif
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Kategori Pemasukan
                </td>

                <td colspan="3" >
                    : @if ($item->jenis_pemberitahuan == "Pemasukan") {{ $item->kategori_pemasukan }} @endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Kategori Pengeluaran
                </td>

                <td colspan="3" style="border-right:1px solid black;">
                    : @if ($item->jenis_pemberitahuan == "Pengeluaran") {{ $item->kategori_pemasukan }} @endif
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    3. Tujuan Pemasukan
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    : @if ($item->jenis_pemberitahuan == "Pemasukan") {{ $item->tujuan_pemasukan }} @endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    3. Tujuan Pemasukan
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    : @if ($item->jenis_pemberitahuan == "Pengeluaran") {{ $item->tujuan_pemasukan }} @endif
                </td>
            </tr>

            <tr>
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>F. PEMBERITAHUAN BARANG</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>G. PEMBAYARAN BEA MASUK/BEA KELUAR</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Asal Barang
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->asal_barang }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Cara Pembayaran
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : @if (!empty($item->details)){{ $item->details->cara_bayar }}@endif
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Kategori Barang
                </td>

                <td colspan="3" >
                    : 
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    
                </td>

                <td colspan="3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    3. Cara Penyerahan Barang
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    : @if (!empty($item->details)){{ $item->details->serah_barang }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    
                </td>
            </tr>

            <tr>
                <td colspan="10" class="font-weight-bold p-2" style="border:1px solid black;background-color: #cfcccc;">
                    IDENTITAS PENGIRIM/PENERIMA/PEMBELI/PENJUAL/PEMILIK/PPJK
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>H. PENGIRIM</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>I. PENERIMA</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Identitas
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->nomor_identitas_pengirim }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Identitas
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->nomor_identitas_penerima }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Nama, Alamat, Negara
                </td>

                <td colspan="3" >
                    : {{ $item->nama_pengirim }}, {{ $item->alamat_pengirim }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    2. Nama, Alamat, Negara
                </td>

                <td colspan="3" style="border-right:1px solid black;">
                    : @if (!empty($item->details)){{ $item->nama_penerima }}, {{ $item->alamat_penerima }}, {{ $item->details->negara_penerima }}@endif
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    3. Ijin Badan Pengusahaan
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    :  @if (!empty($item->details)){{ $item->details->ijin_bpk_pengirim }}, Tanggal : {{ $item->details->tanggal_ijin_bpk_pengirim }} @endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    3. Ijin Badan Pengusahaan
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    : 
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>J. PEMBELI</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>K. PENJUAL</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Identitas
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->nomor_identitas_pembeli }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Identitas
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : @if (!empty($item->details)){{ $item->details->nomor_identitas_penjual }}@endif
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    2. Nama, Alamat, Negara
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    : @if (!empty($item->details)){{ $item->details->nama_pembeli }}, {{ $item->details->alamat_pembeli }}, {{ $item->details->negara_pembeli }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    2. Nama, Alamat, Negara
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    : @if (!empty($item->details)){{ $item->details->nama_penjual }}, {{ $item->details->alamat_penjual }}, {{ $item->details->negara_penjual }}@endif
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>L. PPJK</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    1. NPWP
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    : {{ $item->npwp_ppjk }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    2. Nama, Alamat
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    : {{ $item->nama_ppjk }}, {{ $item->alamat_ppjk }}
                </td>
            </tr>

            <tr>
                <td colspan="10" class="font-weight-bold p-2" style="border:1px solid black;background-color: #cfcccc;">
                    DATA PEMASUKAN / PENGELUARAN
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>Data Transaksi Perdagangan</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>Dokumen Pelengkap Pabean</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    1. Transaksi
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->transaksi }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    15. Invoice
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    2. Valuta
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->transaksi_valuta }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    16. Packing List
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    3. NDPBM / Kurs
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->transaksi_kurs }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    17. BL/AWB
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    4. Nilai Barang
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : 0.00
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    18. Kontrak
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    5. CIF
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->transaksi_cif }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    19. Faktur Pajak
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    6. FOB
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->transaksi_fob }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    20. Master List
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    7. Freight
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->transaksi_freight }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    21. BC 1.1
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    8. Asuransi LN/DN
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details))@if ($item->details->jenis_asuransi == "1 - Dalam Negeri")[DN] 
                    @else
                        [LN]
                    @endif
                    {{ $item->details->transaksi_asuransi }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    22. Surat Persetujuan
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    9. Harga Penyerahan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : 0
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    23. Lainnya
                </td>

                <td colspan="1" class="p-2">
                    : No. 7638
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    Tgl 27-03-2023
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    10. Nilai Maklon
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : @if (!empty($item->details)){{ $item->details->transaksi_maklon }}@endif
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    
                </td>

                <td colspan="1" class="p-2">
                    
                </td>

                <td colspan="2" style="border-right:1px solid black">
                    
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black">
                    11. Bank Devisa Hasil Ekspor
                </td>

                <td colspan="3" style="border-bottom:1px solid black;word-wrap: break-word;">
                    : 0
                </td>

                <td colspan="5" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black">
                    
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>Data Pengangkutan</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>Data Pelengkap Pabean</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    12. Cara Pengangkutan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->cara_angkut }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    24. Berat Bersih Total
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->berat_bersih }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    13. Nama Sarana Pengangkutan, Bendera
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->nama_angkut }}, {{ $item->bendera }} {{ $item->nomor_voy_flight_pol }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    25. Berat Kotor Total
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->berat_kotor }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    26. Volume
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    : {{ $item->volume }}
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>Data Pelabuhan Muat dan Bongkar</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>Data Peti Kemas dan Pengemas</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    27. Pelabuhan Muat
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->pelabuhan_muat }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    32. Jumlah Peti Kemas
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->jumlah_peti_kemas }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    28. Pelabuhan Tujuan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->pelabuhan_tujuan }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    33. Nomor, Ukuran, Tipe Peti Kemas
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : 
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    29. Pelabuhan Transit
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->pelabuhan_transit }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    34. Jumlah Kemasan
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->jumlah_jenis_kemasan }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    35. Jenis dan Merek Kemasan
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    :
                </td>
            </tr>

            <tr>    
                <td colspan="5" class="p-2" style="border-left:1px solid black">
                    <u>Data Perkiraan Tanggal</u>
                </td>

                <td colspan="5" class="p-2" style="border-right:1px solid black;border-left:1px solid black">
                    <u>Data Tempat Penimbunan</u>
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    30. Perkiraan Tanggal Pemasukan
                </td>

                <td colspan="3" style="word-wrap: break-word;">
                    : {{ $item->perkiraan_tanggal_pemasukan }}
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black">
                    36. Tempat Penimbunan
                </td>

                <td colspan="3" style="border-right:1px solid black">
                    : {{ $item->tempat_penimbunan }}
                </td>
            </tr>

            <tr class="text-left">
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    31. Perkiraan Tanggal Pengeluaran
                </td>

                <td colspan="3" style="border-bottom:1px solid black">
                    :
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black">
                    
                </td>

                <td colspan="3" style="border-right:1px solid black;border-bottom:1px solid black">
                    
                </td>
            </tr>

            <tr>
                <td colspan="10" class="font-weight-bold p-2" style="border:1px solid black;background-color: #cfcccc;">
                    DATA BARANG
                </td>
            </tr>

            <tr>    
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black">
                    37 <br/><br/> No.
                </td>

                <td colspan="4" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black">
                    38 - Pos Tarif / HS<br/>
                    - Uraian Jenis secara lengkap, Merek, Tipe, Ukuran, dan Spesifikasi Lainnya<br/>
                    - Kode Barang<br/>
                    - Negara Asal Barang<br/>
                    - Daerah Asal Barang<br/>
                </td>

                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    39. Keterangan<br/>
                    - Fasilitas & No. Urut
                    - Persyaratan & No. Urut
                </td>
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    40. - Skema Tarif dan Fasilitas <br/>
                    - HE Barang dan Tarif BK
                </td>
                <td colspan="2" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    41. - Jumlah & Jenis Satuan <br/>
                        - Berat Bersih (Kg) <br/>
                        - Berat Kotor (Kg) <br/>
                        - Volume (m3) <br/>
                </td>
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    42. - Nilai Pabean<br/>
                        - Jenis<br/>
                        - Nilai Yang Ditambahkan<br/>
                        - Jatuh Tempo<br/>
                </td>
            </tr>

            @php
                $barangs = \App\Models\DataBarang::where('nomor_pengajuan_dokumen', $item->nomor_aju_pabean )->get();  
            @endphp
            
            @foreach ($barangs as $barang)
            <tr>    
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black">
                    {{ $loop->iteration }}.
                </td>

                <td colspan="4" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black">
                    - {{ $barang->pos_tarif ?? '-' }}  <br/>
                    - {{ $barang->merek ?? '' }}, {{ $barang->tipe ?? '' }}, {{ $barang->ukuran ?? '' }}, {{ $barang->spesifikasi_lain ?? '' }} <br/>
                    - {{ $item->asal_barang ?? ''}} <br/>
                </td>

                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    
                </td>
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    BM 15.00 % 100 BBS <br/>
                    PPH 2.50 % 100 BBS <br/>
                    PPN 11.00 % 100 BBS <br/>
                </td>
                <td colspan="2" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    {{ $barang->jumlah_satuan ?? '' }}, {{ $barang->jenis_satuan ?? '' }} <br/>
                    Berat Bersih <br/>
                    {{ $barang->neto ?? 0 }} <br/>
                    Berat Kotor <br/>
                    {{ $barang->bruto ?? 0 }} <br/>
                    Volume <br/>
                    {{ $barang->volume ?? 0 }}  <br/>
                </td>
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;border-left:1px solid black">
                    Nilai Pabean<br/>
                    1,280.52
                </td>
            </tr>
            <tr>    
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    Jenis Pungutan
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    Dibayar (Rp)
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    Ditanggung Pemerintah
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    Ditangguhkan (Rp)
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    Tidak Dipungut (Rp)
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    Dibebaskan (Rp)
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    Telah Dilunasi
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    43.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    BM/BK
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    2.119.000
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    44.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    BMAD/BMP/BMI/BMTP
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    45.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    Cukai
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>
            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    46.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    PPN
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    1.787.000
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>
            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    47.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    PPnBM
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>
            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    48.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    PPh
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    406.000
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>
            <tr> 
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    49.
                </td>   
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    TOTAL
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>

                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    4.312.000
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    0
                </td>
            </tr>

            <tr> 
                <td colspan="5" class="p-2" style="border-left:1px solid black;">
                    M. BUKTI PEMBAYARAN DAN JAMINAN
                </td>   
                <td colspan="3" class="p-2" style="border-left:1px solid black;">
                    N. SEGEL
                </td>

                <td colspan="2" class="p-2" style="border-right:1px solid black;">
                    O. UNTUK PEJABAT
                </td>
            </tr>
            <tr> 
                <td colspan="3" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    SSPCP : No.
                </td>
                <td colspan="2" class="p-2" style="border-bottom:1px solid black;">
                    Tanggal : 
                </td>      
                <td colspan="3" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    (DIISI OLEH DIREKTORAT JENDERAL BEA DAN CUKAI)
                </td>

                <td colspan="2" class="p-2" style="border-right:1px solid black;border-bottom:1px solid black;">
                    DIREKTORAT JENDERAL BEA DAN
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    Jns. Pen.
                </td>
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;">
                    Kode Pen.
                </td>
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    No.Tanda Pembayaran
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    Tanggal
                </td>

                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    Kantor Pabean Asal
                </td>

                <td colspan="1" rowspan="2" class="p-2" style="border:1px solid black;">
                    Catatan Kantor Pabean Tujuan
                </td>

                <td colspan="2" rowspan="2" class="p-2" style="border-right:1px solid black;border-bottom:1px solid black;">
                    Kantor Pabean Asal
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    BM / BK
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>

                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    No. Segel
                </td>

                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    Jenis
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    Cukai
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>

                <td colspan="1" rowspan="5" class="p-2" style="border:1px solid black;">
                    
                </td>

                <td colspan="1" rowspan="5" class="p-2" style="border:1px solid black;">
                    
                </td>

                <td colspan="1" rowspan="5" class="p-2" style="border:1px solid black;">
                    
                </td>

                <td colspan="2" rowspan="5" class="p-2" style="border:1px solid black;">
                    
                </td>

            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    PPN
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>

            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    PPnBM
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>

            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    PPh
                </td>
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>
                <td colspan="2" class="p-2" style="border-left:1px solid black;border-bottom:1px solid black;">
                    
                </td>
                
                <td colspan="1" class="p-2" style="border:1px solid black;">
                    
                </td>

            </tr>

            <tr> 
                <td colspan="2" class="p-2" style="border:1px solid black;">
                    Pejabat Penerima<br/>
                    (............)
                </td>
                <td colspan="3" class="p-2" style="border:1px solid black;">
                    Nama/Stempel Instansi
                </td>
            </tr>

            <tr> 
                <td colspan="5" class="p-2" style="border-left:1px solid black;">
                    P. Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam
                </td>
                <td colspan="5" class="p-2" style="border-left:1px solid black;border-right:1px solid black;">
                    Q. CATATAN DIREKTORAT JENDERAL PAJAK <br/>
                    Mengetahui
                </td>
            </tr>
            <tr> 
                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    BATAM, Tanggal {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y');  }}
                </td>
                <td colspan="3" class="p-2" style="">
                    ........, Tanggal .......
                </td>
                <td colspan="1" class="p-2" style="border-left:1px solid black;">
                    ...........,
                    (lokasi)
                </td>

                <td colspan="1" class="p-2" style="">
                    ...........
                    (tanggal)
                </td>
                <td colspan="1" class="p-2" style="">
                    ...........
                    (bulan)
                </td>
                <td colspan="2" class="p-2" style="border-right:1px solid black;">
                    ...........
                    (tahun)
                </td>
            </tr>

            <tr> 
                <td colspan="2" class="p-2" style="border-left:1px solid black;">
                    Pengusaha/Pemberitahu/PPJK
                </td>
                <td colspan="3" class="p-2" style="">
                    Penerima Barang
                </td>
                <td colspan="5" class="p-2" style="border-left:1px solid black;border-right:1px solid black;">
                    Pejabat/Pegawai Direktorat Jenderal Pajak<br/>
                    Nama : 
                </td>
            </tr>

            <tr> 
                <td colspan="2" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;">
                    {{ $item->nama_ppjk }}
                </td>
                <td colspan="3" class="p-2" style="border-bottom:1px solid black;">
                    <br/>
                    ..........
                </td>
                <td colspan="5" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
                    <br/>
                    NIP :  
                </td>
            </tr>

            <tr> 
                <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;">
                    No.
                </td>
                <td colspan="4" class="p-2" style="border-bottom:1px solid black;">
                    Jenis Dokumen
                </td>
                <td colspan="2" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
                    No. Dokumen
                </td>

                <td colspan="3" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
                    Tanggal Dokumen
                </td>
            </tr>

            @php
                $dokumens = \App\Models\DataDokumen::where('nomor_pengajuan_dokumen', $item->nomor_aju_pabean )->get();  
            @endphp
            
            @foreach ( $dokumens as $dokumen)
                <tr> 
                    <td colspan="1" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;">
                        {{ $loop->iteration }}.
                    </td>
                    <td colspan="4" class="p-2" style="border-bottom:1px solid black;">
                        {{ $dokumen->jenis_dokumen }}
                    </td>
                    <td colspan="2" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
                        {{ $dokumen->nomor_dokumen }}
                    </td>

                    <td colspan="3" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
                        {{ $dokumen->tanggal_dokumen }}
                    </td>
                </tr>
            @endforeach

            <tr> 
                <td colspan="7" class="p-2" style="border-bottom:1px solid black;border-left:1px solid black;">
                    
                </td>
                <td colspan="3" class="p-2" style="border-bottom:1px solid black;border-right:1px solid black;">
                    BATAM, Tanggal {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y');  }}<br/>
                    Penguasa/Pemberitahu/PPJK<br/><br/><br/><br/>
                    {{ $item->nama_ppjk }}
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>