<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaPengajuan extends Model
{
    protected $table = 'anggota_pengajuan';

    protected $fillable = [
        'pengajuan_id',
        'nama_anggota',
        'nip',
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
