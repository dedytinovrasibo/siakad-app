<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = "jurusan";
    
    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
        'jenjang_pendidikan',
        'status_jurusan',
        'sks_lulus',
        'gelar_akademik',
        'tanggal_berdiri',
        'semester_awal'
    ];
    
    public function kurikulum(){
        return $this->hasMany(Kurikulum::class);
    }

    public function program(){
        return $this->hasMany(Program::class);
    }
    
    public function dosen(){
        return $this->hasMany(Dosen::class);
    }
}

