<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;

class Akun extends Model
{
    protected $guarded = [];

    public function Skill()
    {
    	return $this->hasMany(Skill::class,'id_akun','id');	
    }
}
