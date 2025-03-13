<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';

    protected $fillable = [
        'nomor_surat',
        'unit_kerja',
        'berangkat_dari',
        'tujuan',
        'tanggal_berangkat',
        'tanggal_pulang',
    ];

    public function anggotaPengajuan()
    {
        return $this->hasMany(AnggotaPengajuan::class);
    }
}
