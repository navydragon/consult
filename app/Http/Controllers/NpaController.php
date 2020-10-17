<?php

namespace App\Http\Controllers;

use App\Npa;
use Illuminate\Http\Request;


class NpaController extends Controller
{
    public function get_npas()
    {
        return Npa::all();
    }

    public function get_npa(Npa $npa)
    {
        return $npa;
    }
}
