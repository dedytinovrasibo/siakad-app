<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = "matakuliah";

    protected $fillable = [
        'id_dosen',
        'id_kurikulum',
        'kode_matakuliah',
        'nama_matakuliah',
        'sks_teori',
        'sks_praktek',
        'semester',
        'jenis_matakuliah',
        'status_matakuliah',
        'silabus',
        'bahan_ajar',
        'nilai_minimal_lulus'              
    ];

    public function kurikulum()
    {
        return $this->belongsTo(Kurikulum::class, 'id_kurikulum');
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'id_dosen');
    }
}
