<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render(component: 'Dashboard/Index');
    }

    public function pengajuan()
    {
        User::all();
        return Inertia::render(component: 'Dashboard/Pengajuan/Index', props: [
            'user' => User::all(),
        ]);
    }

    public function pengajuanbaru()
    {
        return Inertia::render(component: 'Dashboard/Pengajuan/Baru/Index');
    }
}
