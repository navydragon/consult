<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function type()
    {
        return $this->belongsTo('App\MaterialType','type_id');
    }
}
