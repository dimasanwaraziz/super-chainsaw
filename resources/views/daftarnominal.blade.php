<!doctype html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 8px;
        }

        #watermark {
            position: fixed;
            top: 13%;
            width: 100%;
            text-align: center;
            opacity: .1;
            /* transform: rotate(10deg); */
            transform-origin: 50% 50%;
            z-index: -1000;
        }
    </style>
    <meta charset="UTF-8">
    <title>Users Report</title>
</head>

<body>
    <div id="watermark">
        <img src="{{ public_path('images/watermark-setjen-dpr-ri.png') }}" alt="Watermark"
            style="width: 500px; opacity: 0.6;">
    </div>
    <table style="width:100%; text-align: left;">
        <tr>
            <td style="width: 10%; vertical-align: top;">UNTUK PEMBAYARAN</td>
            <td style="width: 1%; vertical-align: top;">:</td>
            <td style="width: 89%;">BELANJA BARANG KUNJUNGAN KERJA SPESIFIK KOMISI IV DPR RI KE BANTEN DALAM RANGKA
                MENINJAU PEMAGARAN LAUT
                DI 6 KECAMATAN DI KABUPATEN TANGERANG TANGGAL 22 JANUARI 2025 S.D 22 JANUARI 2025 SESUAI SURAT TUGAS NO:
                ST.03/KOM IV/DPR RI/I/2025 A.N SITI HEDIATI SOEHARTO, S.E. ( 20 ORANG )</td>
        </tr>
        <tr>
            <td>LS NO</td>
            <td>:</td>
            <td>140</td>
        </tr>
        <tr>
            <td>MATA ANGGARAN</td>
            <td>:</td>
            <td>001030.CF.5803.ABC.005.054.A.524111</td>
        </tr>
    </table>

    <table border="1" style="width:100%; text-align: center; margin-top: 10px; border-collapse: collapse;">
        <thead>
            <tr>
                <th rowspan="2" style="width: 3%;">NO</th>
                <th rowspan="2" style="width: 10%;">NAMA</th>
                <th rowspan="2" style="width: 10%;">NOMOR ANGGOTA / GOLONGAN</th>
                <th rowspan="2" style="width: 10%;">JABATAN</th>
                <th rowspan="2" style="width: 10%;">DAERAH ASAL</th>
                <th rowspan="2" style="width: 10%;">DAERAH TUJUAN</th>
                <th colspan="2" style="width: 10%;">JADWAL PERJALANAN</th>
                <th colspan="6" style="width: 30%;">BIAYA</th>
                <th rowspan="2" style="width: 7%;">JUMLAH</th>
            </tr>
            <tr>
                <th style="width: 5%;">TANGGAL</th>
                <th style="width: 5%;">JUMLAH HARI</th>
                <th style="width: 5%;">HARIAN / DUKUNGAN UANG SAKU</th>
                <th style="width: 5%;">PENGINAPAN / BIAYA PAKET</th>
                <th style="width: 5%;">REP</th>
                <th style="width: 5%;">SEWA KENDARAAN / TAXI / TRANSPORTASI JAKARTA</th>
                <th style="width: 5%;">SEWA KENDARAAN / TAXI / TRANSPORTASI DAERAH</th>
                <th style="width: 5%;">TRANSPORTASI UDARA / DARAT</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 11; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Nama {{ $i }}</td>
                    <td>A-{{ $i }}</td>
                    <td>Jabatan {{ $i }}</td>
                    <td>Berangkat {{ $i }}</td>
                    <td>Tujuan {{ $i }}</td>
                    <td>Tanggal {{ $i }}</td>
                    <td>{{ $i }} Hari</td>
                    <td>Rp{{ number_format(100000 * $i, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format(200000 * $i, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format(30000 * $i, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format(40000 * $i, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format(50000 * $i, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format(60000 * $i, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format(100000 * $i + 200000 * $i + 30000 * $i + 40000 * $i + 50000 * $i + 60000 * $i, 0, ',', '.') }}
                    </td>
                </tr>
            @endfor
        </tbody>
        <tfoot>
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Total</strong></td>
                <td><strong>Rp {{ number_format((100000 * 50 * 51) / 2, 0, ',', '.') }}</strong></td>
                <td><strong>Rp {{ number_format((200000 * 50 * 51) / 2, 0, ',', '.') }}</strong></td>
                <td><strong>Rp {{ number_format((30000 * 50 * 51) / 2, 0, ',', '.') }}</strong></td>
                <td><strong>Rp {{ number_format((40000 * 50 * 51) / 2, 0, ',', '.') }}</strong></td>
                <td><strong>Rp {{ number_format((50000 * 50 * 51) / 2, 0, ',', '.') }}</strong></td>
                <td><strong>Rp {{ number_format((60000 * 50 * 51) / 2, 0, ',', '.') }}</strong></td>
                <td><strong>Rp
                        {{ number_format((100000 * 50 * 51) / 2 + (200000 * 50 * 51) / 2 + (30000 * 50 * 51) / 2 + (40000 * 50 * 51) / 2 + (50000 * 50 * 51) / 2 + (60000 * 50 * 51) / 2, 0, ',', '.') }}</strong>
                </td>
            </tr>
        </tfoot>
    </table>
    <br>
    <br>
    <table style="width:100%; margin-top: 20px;" border="0">
        <tr>
            <td style="width: 50%;"></td>
            <td style="width: 50%; text-align: left;">DIAJUKAN KE KPPN JAKARTA VII</td>
        </tr>
        <tr>
            <td style="width: 50%;"></td>
            <td style="width: 50%; text-align: left;">TANGGAL:</td>
        </tr>
    </table>
    <table style="width:100%; text-align: center; margin-top: 50px;">
        <tr>
            <td style="width: 33%;">
                <div>MENGETAHUI:</div>
                <div><strong>KEPALA BIRO KEUANGAN,</strong></div>
                <br><br><br><br>
                <div><strong><u>RAHMAD BUDIAJI, S.IP., M.Si.</u></strong></div>
                <div>NIP. 19700801 199603 1 001</div>
            </td>
            <td style="width: 33%;">
                <div>PEJABAT PEMBUAT KOMITMEN</div>
                <div><strong>BIDANG PERSIDANGAN I</strong></div>
                <br><br><br><br>
                <div><strong><u>EFFIE, S.SOS., M.A.P.</u></strong></div>
                <div>NIP. 19680215 199003 2 003</div>
            </td>
            <td style="width: 33%;">
                <div>BENDAHARA PENGELUARAN</div>
                <div><strong>SATKER DEWAN</strong></div>
                <br><br><br><br>
                <div><strong><u>RAHMAD BUDIAJI, S.IP., M.Si.</u></strong></div>
                <div>NIP. 19980211 202101 2 001</div>
            </td>
        </tr>
    </table>
</body>

</html>
