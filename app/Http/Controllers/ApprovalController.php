<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan = Pengajuan::withCount('anggotaPengajuan')->get();

        $totalPending = Pengajuan::where('status_pengajuan', 'pending')->count();
        $totalDisetujui = Pengajuan::where('status_pengajuan', 'disetujui')->count();
        $totalDitolak = Pengajuan::where('status_pengajuan', 'ditolak')->count();
        $totalKeseluruhan = Pengajuan::count();

        return Inertia::render("Approval/Index", [
            'pengajuan' => $pengajuan,
            'totals' => [
                'pending' => $totalPending,
                'disetujui' => $totalDisetujui,
                'ditolak' => $totalDitolak,
                'keseluruhan' => $totalKeseluruhan,
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        return Inertia::render('Approval/Show/Index', [
            'pengajuan' => $pengajuan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
