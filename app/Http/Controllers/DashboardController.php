<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Dashboard');
    }

    public function pengajuan()
    {
        return Inertia::render('Dashboard/Pengajuan/Pengajuan');
    }

    public function downloadRincianPerjalananDinas()
    {
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
}
