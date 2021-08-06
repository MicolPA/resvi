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
        return('Servicios normales');
    }
    public function servicioPersonalizados()
    {
        return('Servicio Personalizados');
    }
    public function servicioPro()
    {
        return('Servicio Pro');
    }
    public function servicioEnvio()
    {
        return('Servicio Envio');
    }
}
