<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialType;
class MaterialTypeController extends Controller
{
    public function get_material_types()
    {
        return MaterialType::all();
    }
}
