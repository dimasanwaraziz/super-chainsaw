<!doctype html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        #watermark {
            position: fixed;
            top: 35%;
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
                <div>PERATURAN MENTERI KEUANGAN NOMOR 113/PMK.05/2012 TENTANG PERJALANAN DINAS JABATAN DALAM NEGERI BAGI
                    PEJABAT NEGARA PEGAWAI NEGERI, DAN PEGAWAI TIDAK TETAP</div>
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
    <div style="text-align: center; font-weight: bold; text-decoration: underline; font-size: 16px;">
        {{ Str::upper('Rincian Biaya Perjalanan Dinas') }}</div>
    <table border="1" style="width: 100%; border-collapse: collapse; margin: 10px 0; border: 2px solid black;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid black; padding: 5px; width: 5%;">No.</th>
                <th style="border: 1px solid black; padding: 5px; width: 50%;">Perincian Biaya</th>
                <th style="border: 1px solid black; padding: 5px; width: 25%;">Jumlah</th>
                <th style="border: 1px solid black; padding: 5px; width: 20%;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid black; padding: 5px; text-align: center;">1</td>
                <td style="border: 1px solid black; padding: 5px;">Biaya Transportasi Jakarta - Kota Semarang, PP</td>
                <td style="border: 1px solid black; padding: 5px; text-align: right;">Rp3.861.000,00</td>
                <td style="border: 1px solid black; padding: 5px; vertical-align: top;" rowspan="6">Perjalanan Dinas
                    Dalam rangka
                    Peninjauan peran dan kolaborasi ID Survey dengan UMKM untuk meningkatkan standar kualitas produk
                    lokal ke Jawa Tengah</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 5px; text-align: center;">2</td>
                <td style="border: 1px solid black; padding: 5px;">Fasilitas Angkutan Dalam Kota/sewa kendaraan (Prov.)
                    selama 3 hari x Rp1.270.000,00</td>
                <td style="border: 1px solid black; padding: 5px; text-align: right;">Rp3.810.000,00</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 5px; text-align: center;">3</td>
                <td style="border: 1px solid black; padding: 5px;">Biaya Uang Harian di Jawa Tengah dari tanggal 6 Maret
                    2025 s/d 8 Maret 2025 selama 3 hari x Rp370.000,00</td>
                <td style="border: 1px solid black; padding: 5px; text-align: right;">Rp3.810.000,00</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 5px; text-align: center;">4</td>
                <td style="border: 1px solid black; padding: 5px;">Biaya Penginapan Pejabat Negara/Pejabat Eselon I 2
                    malam x Rp5.728.000,00</td>
                <td style="border: 1px solid black; padding: 5px; text-align: right;">Rp11.456.000,00</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 5px; text-align: center;">5</td>
                <td style="border: 1px solid black; padding: 5px;">Biaya Representasi 3 hari x Rp250.000,00</td>
                <td style="border: 1px solid black; padding: 5px; text-align: right;">Rp750.000,00</td>
            </tr>
            <tr>
                <td colspan="2" style="border: 1px solid black; padding: 5px; text-align: right;"><b>Total</b></td>
                <td style="border: 1px solid black; padding: 5px; text-align: right;"><b>Rp20.987.000,00</b></td>
            </tr>
            <tr>
                <td colspan="4" style="border: 1px solid black; padding: 5px;">Terbilang: <i><b>(Dua puluh juta
                            sembilan ratus delapan puluh tujuh ribu rupiah)</b></i></td>
            </tr>
        </tbody>
    </table>

    Telah dibayar sejumlah <b>Rp20.987.000,00</b>
    <br>
    <br>


    <div style="text-align: right;">
        <div>Jakarta, 20 Januari 2025</div>
    </div>
    <table style="width: 100%; text-align: center; margin-top: 10px;">
        <tr>
            <td style="width: 50%;">
                <div><b>BENDAHARA PENGELUARAN DPR-RI<br>SATKER DEWAN</b></div>
                <br><br><br><br>
                <div><u><b>CHANTYA ALYA SAKINA, A.Md.Ak.</b></u></div>
                <div>NIP. 19980211 202101 2 001</div>
            </td>
            <td style="width: 50%;">
                <div><b>Yang Menerima</b></div>
                <br><br><br><br>
                <div><u><b>DIMAS ANWAR AZIZ</b></u></div>
                <div>A-A-117</div>
            </td>
        </tr>
    </table>

    <br>
    <hr style="border: 1px solid black;">

    <br>
    <div style="text-align: center; font-weight: bold; text-decoration: underline;">
        PERHITUNGAN SPD RAMPUNG
    </div>
    <table style="width: 50%; border-collapse: collapse; margin: 20px auto;">
        <tr>
            <td style="padding: 5px;">Ditetapkan sejumlah</td>
            <td style="text-align: center; padding: 5px;">:</td>
            <td style="padding: 5px;">Rp20.987.000,00</td>
        </tr>
        <tr>
            <td style="padding: 5px;">Yang telah dibayar semula</td>
            <td style="text-align: center; padding: 5px;">:</td>
            <td style="padding: 5px;">Rp20.987.000,00</td>
        </tr>
        <tr>
            <td style="padding: 5px;">Sisa kurang / lebih</td>
            <td style="text-align: center; padding: 5px;">:</td>
            <td style="padding: 5px;">Rp0</td>
        </tr>
    </table>

    <table style="width: 100%; text-align: center; margin-top: 50px;">
        <tr>
            <td style="width: 50%;"></td>
            <td style="width: 50%;">
                <div><b>PEJABAT PEMBUAT KOMITMEN<br>BIDANG PERSIDANGAN I</b></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div><u><b>EFFIE, S.SOS., M.A.P.</b></u></div>
                <div>NIP. 12345678 202101 1 001</div>
            </td>
        </tr>
    </table>

</body>

</html>
