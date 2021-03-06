<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
    public function index()
    {
        return('Inicio pagina de servicio');
    }
    // constructores para servicios
    public function serviciosNormales()
    {
        return view('servicios.normales');
    }
    public function serviciosNormalesBoleto()
    {
        return view('servicios.normalesBoletos');
    }
    public function servicioPersonalizados()
    {
        return view('servicios.personalizados');
    }
    public function servicioPersonalizadosBoleto()
    {
        return view('servicios.personlizadosBoletos');
    }
    public function servicioPro()
    {
        return view('servicios.pro');
    }
    public function servicioProBoleto()
    {
        return view('servicios.proBoleto');
    }
    public function servicioEnvio()
    {
        return view('servicios.envio');
    }
    public function servicioEnvioBoleto()
    {
        return view('servicios.envioBoleto');
    }
}
