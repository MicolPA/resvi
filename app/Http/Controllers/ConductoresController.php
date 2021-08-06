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
        return('Lista de conductores');
    }
}
