<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{

    protected $fillable=[
        'id_siswa','id_pelanggaran','keterangan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'id_siswa');
    }
    public function pelanggaran()
    {
       return $this->belongsTo(Pelanggaran::class,'id_pelanggaran');
    }
}
