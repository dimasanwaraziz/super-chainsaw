<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function download()
    {
        return Inertia::render('Dashboard/Download/Download');
    }
}
