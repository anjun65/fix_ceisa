<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PPFTZ SPPB</title>
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
                <td colspan="10" class="px-3 font-weight-bold" style="border:1px solid black;font-size: 16px">
                    KEMENTERIAN KEUANGAN REPUBLIK INDONESIA<br/>
                    DIREKTORAT JENDERAL BEA DAN CUKAI<br/>
                    KPU BC TIPE B BATAM<br/>
                </td>
            </tr>

            <tr>
                <td colspan="10" class="px-3 font-weight-bold text-center" style="border-left:1px solid black;border-right:1px solid black">
                    <u>SURAT PERSETUJUAN PENGELUARAN BARANG (SPPB)</u>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="px-3" style="border-left:1px solid black;">
                </td>
                <td colspan="4" class="px-3">
                    Nomor : {{ $item->id }}/SPPB/KPU.02/2023
                </td>

                <td colspan="4" class="px-3" style="border-right:1px solid black;">
                    Tanggal : {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y');  }}
                </td>
            </tr>

            <tr>
                <td colspan="6" class="px-3" style="border-left:1px solid black;">
                    Nomor Pendaftaran : {{ $item->id }} <br/>
                    PPFTZ-01 Dari LDP <br/>
                    Kepada :<br/>
                </td>

                <td colspan="4" class="px-3" style="border-right:1px solid black;">
                    Tanggal : {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y');  }}
                </td>
            </tr>

            <tr>
                <td colspan="10" class="px-3" style="border-left:1px solid black;border-right:1px solid black;">
                    Nomor Pendaftaran : {{ $item->id }} <br/>
                    PPFTZ-01 Dari LDP <br/>
                    Kepada :<br/>
                </td>
            </tr>

            <tr>
                <td colspan="10" class="px-3" style="border-left:1px solid black;border-right:1px solid black;">
                    Pengirim/Penerima
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    KTP
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : {{ $item->nomor_identitas_pengirim }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    Nama
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : {{ $item->nama_pengirim }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    Alamat
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : {{ $item->alamat_pengirim }}
                </td>
            </tr>

            <tr>
                <td colspan="10" class="px-3" style="border-left:1px solid black;border-right:1px solid black;">
                    PPJK
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    NPWP
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : {{ $item->npwp_ppjk }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    Nama
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : {{ $item->nama_ppjk }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    Alamat
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : {{ $item->alamat_ppjk }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-5" style="border-left:1px solid black;">
                    NP PPJK
                </td>

                <td colspan="7" class="text-left" style="border-right:1px solid black;">
                    : -
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    Lokasi
                </td>

                <td colspan="2" class="px-3" >
                    : {{ $item->pos_bc11 }}
                </td>

                <td colspan="5" class="px-3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    No. B/L atau AWB
                </td>

                <td colspan="2" class="px-3">
                    : 781A-03
                </td>

                <td colspan="2" class="px-3">
                    Tanggal
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    : 16-05-2023
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    Nama Sarana Pengangkut
                </td>

                <td colspan="2" class="px-3">
                    : {{ $item->nama_pengangkut }}
                </td>

                <td colspan="2" class="px-3">
                    
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    No. Voy/Flight
                </td>

                <td colspan="2" class="px-3">
                    : {{ $item->nomor_voy_flight_pol }}
                </td>

                <td colspan="2" class="px-3">
                    
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    No. BC 1.1
                </td>

                <td colspan="2" class="px-3">
                    : {{ $item->nilai_bc11 }}
                </td>

                <td colspan="2" class="px-3">
                    Tanggal
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    : {{ \Carbon\Carbon::parse($item->tanggal_bc11)->format('d-m-Y');  }} Pos: {{ $item->pos_bc11 }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    Jumlah/Jenis Kemasan
                </td>

                <td colspan="2" class="px-3">
                    : {{ $item->jumlah_jenis_kemasan }} PK
                </td>

                <td colspan="2" class="px-3">
                    Berat
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    : {{ $item->berat_kotor }}
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    Merk kemasan
                </td>

                <td colspan="2" class="px-3">
                    : 
                </td>

                <td colspan="2" class="px-3">
                    
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    Jumlah peti kemas
                </td>

                <td colspan="2" class="px-3">
                    : {{ $item->jumlah_peti_kemas }}
                </td>

                <td colspan="2" class="px-3">
                    
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            @php
                $peti = \App\Models\DataPeti::where('nomor_pengajuan_dokumen', $item->nomor_aju_pabean )->first();  
            @endphp
            <tr>
                <td colspan="3" class="px-3" style="border-left:1px solid black;">
                    Nomor peti kemas / ukuran
                </td>

                <td colspan="2" class="px-3">
                    : @if ($peti){{ $peti->nomor }} / {{ $peti->ukuran }}@endif
                </td>

                <td colspan="2" class="px-3">
                    
                </td>

                <td colspan="3" class="px-3" style="border-right:1px solid black;">
                    
                </td>
            </tr>

            <tr>
                <td colspan="10" class="px-3" style="border-left:1px solid black;border-right:1px solid black;">
                    Catatan pengeluaran: 
                </td>
            </tr>

            <tr>
                <td colspan="10" class="px-3" style="border-left:1px solid black;border-right:1px solid black;">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
            </tr>

            <tr>
                <td colspan="5" class="px-3" style="border-bottom:1px solid black;border-left:1px solid black;">
                    Batam, 16-05-2023<br/>
                    Pejabat Pemeriksa Dokumen Barang<br/>
                    <br/>
                    Tanda tangan :
                    <br/>
                    Nama :
                    <br/>
                    NIP :<br/><br/>
                </td>

                <td colspan="5" class="px-3" style="border-bottom:1px solid black;border-right:1px solid black;">
                    Batam, {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y');  }}<br/>
                    Pejabat yang mengawasi pengeluaran<br/>
                    <br/>
                    Tanda tangan :
                    <br/>
                    Nama :
                    <br/>
                    NIP :<br/><br/>
                </td>
            </tr>
            
        </tbody>
    </table>

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
                <td colspan="8" class="px-3">
                    Peruntukan :<br/>
                    1. Pengirim/Penerima; <br/>
                    2. Pejabat yang mengawasi pengeluaran barang.<br/>
                </td>

                <td colspan="2" class="px-3">
                    Halaman 1 dari 1
                </td>
            </tr>
            
        </tbody>
    </table>
</body>

</html>