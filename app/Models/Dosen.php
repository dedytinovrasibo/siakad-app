<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = "dosen";

    protected $fillable = [
        'id_nilai',
        'id_jurusan', 
        'nidn', 
        'nip', 
        'nama_dosen', 
        'tanggal_lahir', 
        'tempat_lahir', 
        'jenis_kelamin', 
        'agama', 
        'no_ktp', 
        'no_hp', 
        'no_telp', 
        'email_dosen'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function matakuliah()
    {
        return $this->hasMany(Matakuliah::class);
    }
}
