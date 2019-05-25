<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Akun;

class Skill extends Model
{
    protected $guarded = [];

    public function Akun()
    {
    	return $this->belongsTo(Akun::class,'id_akun','id');
    }
}
