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

    public function download123()
    {
        return Inertia::render('Dashboard/Download/Download');
    }

    public function download()
    {
        $users = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('rincianbiayaperjadin', compact('users'));
        return $pdf->stream('users.pdf');

    }
}
