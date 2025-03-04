<!doctype html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #watermark {
            position: fixed;
            top: 35%;
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
        <img src="{{ public_path('images/watermark-setjen-dpr-ri.png') }}" alt="Watermark" style="width: 500px; opacity: 0.6;">
    </div>
    <table style="width: 100%; margin-bottom: 20px;">
        <tr>
            <td style="width: 70%;">
                <div style="text-align: center;">
                    <div><b>{{ Str::upper('Dewan Perwakilan Rakyat') }}</b></div>
                    <div><u><b>{{ Str::upper('Republik Indonesia') }}</b></u></div>
                </div>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 10%;"><b>TA</b></td>
                        <td style="width: 90%;">: 2025</td>
                    </tr>
                    <tr>
                        <td style="width: 10%;"><b>MAK</b></td>
                        <td style="width: 90%;">: 001030.CF.5803.ABC.005.054.A.524111</td>
                    </tr>
                </table>
            </td>
            <td style="width: 30%; text-align: right; font-size: 6px; vertical-align: top;">
                <div><u>LAMPIRAN II</u></div>
                <div>PERATURAN MENTERI KEUANGAN NOMOR 113/PMK.05/2012 TENTANG PERJALANAN DINAS JABATAN DALAM NEGERI BAGI PEJABAT NEGARA PEGAWAI NEGERI, DAN PEGAWAI TIDAK TETAP</div>
            </td>
        </tr>
    </table>

    <div style="display: flex; justify-content: space-between; width: 100%;">
        <div><b>Lampiran SPD Nomor</b></div>
        <div>140 / DEWAN / PERJADIN / I / 2025</div>
    </div>
    <br>
    <div>Tanggal 20 Januari 2025</div>

    <br>
    <div style="text-align: center; font-weight: bold; text-decoration: underline; font-size: 16px;">{{ Str::upper('Rincian Biaya Perjalanan Dinas') }}</div>
    <table border="1" style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 5px;">No.</th>
                <th style="border: 1px solid black; padding: 5px;">Perincian Biaya</th>
                <th style="border: 1px solid black; padding: 5px;">Jumlah</th>
                <th style="border: 1px solid black; padding: 5px;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid black; padding: 5px;">1</td>
                <td style="border: 1px solid black; padding: 5px;">Transportasi</td>
                <td style="border: 1px solid black; padding: 5px;">Rp 1.000.000</td>
                <td style="border: 1px solid black; padding: 5px;">PP</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 5px;">2</td>
                <td style="border: 1px solid black; padding: 5px;">Akomodasi</td>
                <td style="border: 1px solid black; padding: 5px;">Rp 2.000.000</td>
                <td style="border: 1px solid black; padding: 5px;">Hotel</td>
            </tr>
            <tr>
                <td colspan="4" style="border: 1px solid black; padding: 5px;">Total Biaya: Rp 3.000.000</td>
            </tr>
        </tbody>
    </table>

    Telah dibayar sejumlah Rp 3.000.000 pada tanggal 20 Januari 2025.
    <br>
    <br>


    <div style="text-align: right;">
        <div>Jakarta, 20 Januari 2025</div>
    </div>
    <table style="width: 100%; text-align: center; margin-top: 10px;">
        <tr>
            <td style="width: 50%;">
                <div><b>BENDAHARA PENGELUARAN DPR-RI SATKER DEWAN</b></div>
                <br><br><br><br>
                <div><u><b>Nama Bendahara</b></u></div>
                <div>NIP. 19980211 202101 2 001</div>
            </td>
            <td style="width: 50%;">
                <div><b>Yang Menerima</b></div>
                <br><br><br><br>
                <div><u><b>Nama Penerima</b></u></div>
                <div>A-A-117</div>
            </td>
        </tr>
    </table>

    <br>
    <hr style="border: 2px solid black;">

    PERHITUNGAN SPD RAMPUNG
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="border: 1px solid black; padding: 5px;">Ditetapkan sejumlah</td>
            <td style="border: 1px solid black; padding: 5px;">Rp 3.000.000</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px;">Yang telah dibayar semula</td>
            <td style="border: 1px solid black; padding: 5px;">Rp 3.000.000</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px;">Sisa kurang / lebih</td>
            <td style="border: 1px solid black; padding: 5px;">Rp 0</td>
        </tr>
    </table>

    <table style="width: 100%; text-align: center; margin-top: 50px;">
        <tr>
            <td style="width: 50%;"></td>
            <td style="width: 50%;">
                <div><b>PEJABAT PEMBUAT KOMITMEN BIDANG PERSIDANGAN I</b></div>
                <br><br><br><br>
                <div><u><b>Nama Pejabat</b></u></div>
                <div>NIP. 12345678 202101 1 001</div>
            </td>
        </tr>
    </table>

</body>
</html>