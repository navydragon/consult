<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npa extends Model
{
    public function materials()
    {
        return $this->belongsToMany('App\Material','material_npa','npa_id','material_id');
    }
}
