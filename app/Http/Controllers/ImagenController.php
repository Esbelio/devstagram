<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    //
    public function store(Request $request)
    {
        $imagene = $request->file('file');

        $nombreImagen = Str::uuid() . "." .$imagen->extension();

        return response()->json(['imagen' => $imagene->extension()]);
    }
}
