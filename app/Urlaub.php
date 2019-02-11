<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urlaub extends Model
{
    protected $table = 'tbl_urlaub';
    protected $primaryKey = 'uId';
    public function stammdaten()
    {
        return $this->belongsTo('App\Stammdaten');
    }
}
