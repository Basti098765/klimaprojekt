<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stammdaten extends Model
{
    protected $table = 'tbl_stammdaten';
    protected $primaryKey = 'stId';
    public function urlaub()
    {
        return $this->hasOne('App\Urlaub');
    }
    public function anwesenheit()
    {
        return $this->hasMany('App\anwesenheit');
    }
     public function sollArbeitsZeit()
    {
        return $this->hasMany('App\SollArbeitsZeit');
    }
     public function Fehlzeit()
    {
        return $this->hasMany('App\Fehlzeit');
    }
}
