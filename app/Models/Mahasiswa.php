<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";

    protected $fillable = [
        'id_program', 
        'nim_mhs', 
        'no_ktp_mhs', 
        'no_kk_mhs', 
        'no_npwp_mhs', 
        'penasihat_akademik', 
        'nama_mhs_lengkap', 
        'tempat_lahir_mhs', 
        'tanggal_lahir', 
        'jenis_kelamin_mhs', 
        'agama_mhs', 
        'warga_negara_mhs', 
        'status_mhs', 
        'telp_mhs', 
        'no_hp_mhs', 
        'email_mhs', 
        'status_masuk'
    ];

    
}   
