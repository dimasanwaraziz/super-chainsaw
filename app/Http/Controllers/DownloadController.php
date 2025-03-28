<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadRincianPerjalananDinas(Request $request)
    {
        $pengajuanId = $request->post('id');
        $users = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('rincianbiayaperjadin', compact('users'));
        return $pdf->stream('users.pdf');
    }

    public function downloadPertanggungjawaban()
    {
        $users = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('pertanggungjawaban', compact('users'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('users.pdf');
    }

    public function downloadTandaTerimaPerjalananDinas()
    {
        $users = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('tandaterimaperjadin', compact('users'));
        $pdf->setPaper([0, 0, 612, 936], 'portrait'); // Set paper size to continuous form
        return $pdf->stream('users.pdf');
    }

    public function downloadDaftarNominal()
    {
        $users = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('daftarnominal', compact('users'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('users.pdf');
    }

    public function downloadSuratTugas()
    {
        $users = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('surattugas', compact('users'));
        $pdf->setPaper('a4');
        return $pdf->stream('users.pdf');
    }
}
