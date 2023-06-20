<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PPFTZ NPPB</title>
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

    <body style="font-size: 14px">
        
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
                    <td colspan="10" class="px-3" style="border:1px solid black;font-size: 16px;border-bottom:0px;">
                        KEMENTERIAN KEUANGAN REPUBLIK INDONESIA<br/>
                        DIREKTORAT JENDERAL BEA DAN CUKAI<br/>
                        KANTOR PELAYANAN UTAMA BEA DAN CUKAI TIPE B BATAM<br/>
                    </td>
                </tr>

                <tr>
                    <td colspan="10" class="px-3 text-center font-weight-bold" style="border-left:1px solid black;border-right:1px solid black;font-size: 16px">
                        <br/>
                        NOTA PELAYANAN PENGELUARAN BARANG (NPPB)<br/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="px-3 text-right font-weight-bold" style="border-left:1px solid black">
                        Nomor
                    </td>

                    <td colspan="4" class="px-3 text-left font-weight-bold">
                        : {{ $item->id }}/NPPB/KPU.02/2023
                    </td>

                    <td colspan="3" class="px-3" style="border-right:1px solid black;font-size: 16px">
                        Tanggal : {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y');  }}
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="px-3 text-right font-weight-bold" style="border-left:1px solid black">
                        No. Pendaftaran
                    </td>

                    <td colspan="4" class="px-3 text-left font-weight-bold">
                        : {{ $item->nomor_aju_pabean }}
                    </td>

                    <td colspan="3" class="px-3" style="border-right:1px solid black;font-size: 16px">
                        Tanggal : {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y');  }}
                    </td>
                </tr>

                <tr>
                    <td colspan="7" class="px-3 text-right font-weight-bold" style="border-left:1px solid black;font-size: 16px">
                        
                    </td>

                    <td colspan="3" class="px-3" style="border-right:1px solid black;font-size: 16px">
                        Lembar ke-1 dari 1
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;border:1px solid black">
                        1. Kantor Pabean Pemuatan
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;border:1px solid black">
                        : {{ $item->kantor_aju_pabean }}
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;border:1px solid black">
                        2. NPWP/NAMA PENGIRIM
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;border:1px solid black">
                        : {{ $item->nomor_identitas_pengirim }} / {{ $item->nama_pengirim }}
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;border:1px solid black">
                        3. NPWP/NAMA PPJK
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;border:1px solid black">
                        : {{ $item->npwp_ppjk }} / {{ $item->nama_ppjk }}
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;">
                        4. SARANA PENGANGKUT
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;">
                        
                    </td>                    
                </tr>

                <tr>
                    <td colspan="5" class="px-5" style="border-left:1px solid black;">
                        a. Nama : {{ $item->nama_angkut }}
                    </td>

                    <td colspan="5" class="px-5" style="border-right:1px solid black;">
                        b. Voyage/Flight : {{ $item->nomor_voy_flight_pol }}
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;border:1px solid black">
                        5. TANGGAL PERKIRAAN
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;border:1px solid black">
                        : {{ $item->perkiraan_tanggal_pemasukan }}
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;border:1px solid black">
                        6. PELABUHAN MUAT
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;border:1px solid black">
                        : {{ $item->pelabuhan_muat }}
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;border:1px solid black">
                        7. BERAT KOTOR
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;border:1px solid black">
                        : {{ $item->berat_kotor }} (Kg)
                    </td>                    
                </tr>

                <tr>
                    <td colspan="3" class="px-3" style="border-left:1px solid black;">
                        8. KEMASAN
                    </td>

                    <td colspan="7" class="px-3" style="border-right:1px solid black;">
                        
                    </td>                    
                </tr>

                @php
                    $peti = \App\Models\DataPeti::where('nomor_pengajuan_dokumen', $item->nomor_aju_pabean )->first();  
                @endphp
                <tr>
                    <td colspan="5" class="px-5" style="border-left:1px solid black;">
                        PETI KEMAS<br/>
                        a. Merk/Nomor: @if ($peti) {{ $peti->tipe }}, {{ $peti->nomor }} @endif<br/>
                        b. Ukuran: @if ($peti) {{ $peti->ukuran }} @endif<br/>
                    </td>

                    <td colspan="5" class="px-5" style="border-right:1px solid black;">
                        NON PETI KEMAS<br/>
                        a. Jenis/ Merek Kemasan:<br/>
                        b. Jumlah:<br/>
                    </td>                    
                </tr>

                <tr>
                    <td colspan="10" class="p-3 text-center" style="border:1px solid black;">
                        UNTUK KANTOR PABEAN PEMUATAN
                    </td>
                </tr>

                <tr>
                    <td colspan="5" class="p-3" style="border:1px solid black;">
                        A. CATATAN PEMERIKSAAN DOKUMEN<br/>
                        Pejabat Pemeriksa Dokumen <br/>
                        <br/><br/>
                        Nama : <br/>
                        NIP : <br/>
                    </td>

                    <td colspan="5" class="p-3" style="border:1px solid black;">
                        B. CATATAN PEMERIKSAAN FISIK BARANG<br/>
                        Pemeriksa <br/>
                        <br/><br/>
                        Nama : <br/>
                        NIP : <br/>
                    </td>
                </tr>

                <tr>
                    <td colspan="5" class="p-3" style="border:1px solid black;">
                        C. CATATAN PENGAWAN STUFFING<br/>
                        Merek/Nomor Peti :<br/>
                        Ukuran Peti Kemas :<br/><br/>
                        Jenis : No. Segel: 
                    </td>

                    <td colspan="5" class="p-3" style="vertical-align: top;border:1px solid black;">
                        Petugas Pengawasan
                    </td>
                </tr>


                <tr>
                    <td colspan="5" class="p-3" style="border:1px solid black;">
                        D. CATATAN PEMASUKAN BARANG KE KAWASAN PABEAN<br/>
                        SEGEL <input type="checkbox" /> Utuh <input type="checkbox" /> Rusak <input type="checkbox" /> Tidak Sesuai <br/>
                        
                        Selesai masuk:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pukul:<br/>
                        Petugas Dinas Luar :  
                    </td>

                    <td colspan="5" class="p-3" style="vertical-align: top;border:1px solid black;">
                        E. CATATAN PEMASUKAN BARANG KE SARANA PENGANGKUT<br/>
                        Selesai muat tanggal : Pukul : <br/>
                        Petugas Dinas Luar :<br/>
                    </td>
                </tr>

                <tr>
                    <td colspan="10" class="text-right">
                        Peruntukkan Pengirim/TPS/Pengangkut/Kantor
                    </td>
                </tr>

            </tbody>
        </table>
    </body>

</html>