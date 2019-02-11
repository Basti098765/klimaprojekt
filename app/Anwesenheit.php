<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anwesenheit extends Model
{
    protected $table = 'tbl_anwesenheiten';
    protected $primaryKey ='awId';
    public function projekt()
    {
        return $this->hasMany('App\ArbeitAmProjekts');
    }
}
