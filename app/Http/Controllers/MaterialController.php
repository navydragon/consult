<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;


class MaterialController extends Controller
{
    public function get_materials()
    {
        $mts = Material::orderBy('created_at', 'desc')->get();
        foreach ($mts as $mt)
        {
            $mt->type = $mt->type;
        }
        return $mts;
    }

    public function get_last_update()
    {
        return Material::orderBy('created_at', 'desc')->get()->first();
    }
}
