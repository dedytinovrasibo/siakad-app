<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = "program";

    protected $fillable = [
        'id_jurusan',
        'kode_program',
        'nama_program',
        'status_program',
        'tanggal_berdiri',
        'created_at',
        'updated_at'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
