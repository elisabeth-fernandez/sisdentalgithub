<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bienvenido($nombre)
    {
        // echo "Bienvenido al controlador principal";
        return view('principal/bienvenido', compact('nombre'));
    }
}
