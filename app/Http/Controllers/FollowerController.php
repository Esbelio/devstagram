<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store() 
    {
        dd('Siguiendo');
    }

    public function destroy()
    {
        dd('Eliminando');
    }
}
