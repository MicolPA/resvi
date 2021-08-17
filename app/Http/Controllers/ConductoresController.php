<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConductoresController extends Controller
{
    // constructores para conductores
    public function index()
    {
        return('Inicio de constructores');
    }
    public function conductoresVerLista()
    {
        return view('conductores.lista');
    }
    public function conductoresTurno()
    {
        return view('conductores.turno');
    }
    public function conductoresPersonalizado()
    {
        return view('conductores.personalizado');
    }
}
