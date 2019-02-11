<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projekt extends Model
{
    protected $table = 'tbl_projekte';
     protected $primaryKey = 'pjId';
     public function arbeitAmProjekt()
     {
         return $this->hasMany('App\ArbeitAmProjekt');
     }
}
