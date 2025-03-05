<!doctype html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #watermark {
            position: fixed;
            top: 13%;
            width: 100%;
            text-align: center;
            opacity: .2;
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
    <table width="100%" style="font-size: 12px;">
        <tr>
            <td style="text-align: left; vertical-align: top; width: 33%;">
                <div style="text-align: center;">
                    <strong>SEKRETARIAT JENDERAL<br>DEWAN PERWAKILAN RAKYAT <u>REPUBLIK INDONESIA</u></strong>
                </div>
            </td>
            <td style="text-align: center; vertical-align: top; width: 33%;">
                <table width="100%" style="font-size: 12px;">
                    <tr>
                        <th style="text-align: left; width: 30%;">LS No</th>
                        <th style="width: 5%;">:</th>
                        <td style="text-align: left; width: 65%;">(140)</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; width: 30%;">SPP/SPBY</th>
                        <th style="width: 5%;">:</th>
                        <td style="text-align: left; width: 65%;"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; width: 30%;">Realisasi</th>
                        <th style="width: 5%;">:</th>
                        <td style="text-align: left; width: 65%;"><u>Rp </u></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; width: 30%;">KT</th>
                        <th style="width: 5%;">:</th>
                        <td style="text-align: left; width: 65%;">Rp </td>
                    </tr>
                </table>
            </td>
            <td style="text-align: right; vertical-align: top; width: 33%;">
                <div style="text-align: center;">
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG('123456789', 'C39') }}" alt="barcode"
                        style="max-width: 100%; height: auto;" />
                    <br>
                    <span>123456789</span>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <div style="text-align: center;"><strong><u>TANDA TERIMA UANG PERJALANAN DINAS</u></strong></div>
    <br>
    <div style="font-size: 12px;"><strong>M.A. : <u>001030.CF.5803.ABC.005.054.A.524111</u></strong></div>
    <br>
    <table width="100%" style="font-size: 12px;">
        <tr>
            <td style="text-align: center; vertical-align: top; width: 33%;">
                <table width="100%">
                    <tr>
                        <th style="text-align: left; vertical-align: top; width: 20%; padding-bottom: 10px;">Telah
                            diterima dari</th>
                        <th style="width: 5%; vertical-align: top; padding-bottom: 10px;">:</th>
                        <td style="text-align: left; width: 75%; padding-bottom: 10px;">Bagian Perjalanan Sekretariat
                            Jenderal Dewan Perwakilan
                            Rakyat Republik Indonesia</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; vertical-align: top; width: 20%; padding-bottom: 10px;">Uang
                            sebesar</th>
                        <th style="width: 5%; vertical-align: top; padding-bottom: 10px;">:</th>
                        <td style="text-align: left; width: 75%; padding-bottom: 10px;">( Tiga puluh satu juta tiga
                            ratus dua puluh dua ribu
                            rupiah )</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; vertical-align: top; width: 20%; padding-bottom: 10px;">Untuk</th>
                        <th style="width: 5%; vertical-align: top; padding-bottom: 10px;">:</th>
                        <td style="text-align: justify; width: 75%; padding-bottom: 10px;">Biaya perjalanan Dinas Kunjungan
                            Kerja Spesifik Komisi
                            IV DPR RI Ke Banten dalam rangka meninjau pemagaran laut di 6 kecamatan di Kabupaten
                            Tangerang a.n SITI HEDIATI SOEHARTO, S.E., CS Tanggal 22 Januari 2025, Sesuai Surat Tugas
                            No: ST.03/KOM IV/DPR RI/I/2025 Tanggal 20 Januari 2025 yang akan dipertanggungjawabkan
                            kemudian.</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <br>
    <div style="text-align: center;">JUMLAH: <strong>31.322.000,00</strong></div>

    <br>
    <div style="text-align: justify; font-size: 12px;"><strong>Dengan perjanjian bahwa saya yang bertanda tangan di bawah ini akan mempertanggungjawabkan paling lambat 5
        (lima) hari kerja setelah perjalanan dinas dilaksanakan dengan menyerahkan dokumen pertanggungjawaban biaya</strong>
    </div>
    <br>
    <table width="100%" style="font-size: 12px; text-align: center;">
        <tr>
            <td style="width: 25%; text-align: left; vertical-align: top;">a.n KABAG PERJALANAN Kasubag Perjalanan Dinas Dalam Negeri Dewan</td>
            <td style="width: 25%; text-align: left; vertical-align: top;">Mengetahui<br>Pejabat Penanda Tangan SPM</td>
            <td style="width: 25%; text-align: left; vertical-align: top;">Lunas Dibayar<br>Bendahara Pengeluaran Satker Dewan</td>
            <td style="width: 25%; text-align: left; vertical-align: top;">Jakarta, </td>
        </tr>
        <tr>
            <td style="height: 80px;"></td>
            <td style="height: 80px;"></td>
            <td style="height: 80px;"></td>
            <td style="height: 80px;"></td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong><u>(........................................)</u></strong></td>
            <td style="text-align: left;"><strong><u>(........................................)</u></strong></td>
            <td style="text-align: left;"><strong><u>(........................................)</u></strong></td>
            <td style="text-align: left;"><strong><u>(........................................)</u></strong></td>
        </tr>
        <tr>
            <td style="text-align: left;">NIP: ........................................</td>
            <td style="text-align: left;">NIP: ........................................</td>
            <td style="text-align: left;">NIP: ........................................</td>
            <td style="text-align: left;">NIP: ........................................</td>
        </tr>
    </table>

    <br>
    <div style="text-align: right; font-size: 12px; color: #555;">
       Siloket / {{ \Carbon\Carbon::now()->format('d F Y, H:i') }}
    </div>
</body>

</html>
