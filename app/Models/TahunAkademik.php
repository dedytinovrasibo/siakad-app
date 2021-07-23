<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    use HasFactory;

    protected $table = "tahunAkademik";

    protected $fillable = [
        'tahun',
        'semester_mhs',
        'nama_tahun',
        'batas_krs',
        'pembayaran_ukt',
        'perkuliahan_awal',
        'perkuliahan akhir',
        'uts_awal',
        'uts_akhir',
        'uas_awal',
        'uas_akhir',
        'akhir_entry_nilai',
        'created_at',
        'updated_at'
    ];

    public function kurikulum(){
        return $this->hasMany(Kurikulum::class);
    }
}
