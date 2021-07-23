<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;

    protected $table = "kurikulum";

    protected $fillable = [
        'id_jurusan',
        'id_tahunAkademik',
        'semester',
        'tahun_berjalan',
        'kode_kurikulum',
        'nama_kurikulum',
        'sks_wajib',
        'created_at',
        'updated_at'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class,'id_jurusan');
    }

    public function tahunAkademik(){
        return $this->belongsTo(TahunAkademik::class, 'id_tahunAkademik');
    }
    
    public function matakuliah(){
        $this->hasMany(Matakuliah::class);
    }
}
