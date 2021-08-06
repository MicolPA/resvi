<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    // constructores para usuarios
    public function index()
    {
        return('Inicio de lista de usuario');
    }
    public function usuarioLista()
    {
        return('Lista de Usuarios');
    }
    public function usuarioRol()
    {
        return('Lista de roles');
    }
}
