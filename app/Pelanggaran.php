<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $fillable=[
        'nama','bobot'
    ];
}
