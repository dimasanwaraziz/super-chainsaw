<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Index');
    }

    public function pengajuan()
    {
        User::all();
        return Inertia::render('Dashboard/Pengajuan/Index', [
            'user' => User::all(),
        ]);
    }

    public function pengajuanbaru()
    {
        return Inertia::render('Dashboard/Pengajuan/Baru/Index');
    }
}
