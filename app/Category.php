<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function materials()
    {
        return $this->belongsToMany('App\Material','material_category','category_id','material_id');
    }
}
