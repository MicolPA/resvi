<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    // constructores para usuarios
    public function index()
    {
        return('Inicio de lista de usuario');
    }
    public function usuarioLista()
    {
        $suariosRegistrados = User::paginate(15);
        return view('usuarios.lista',compact(['suariosRegistrados']));
    }
    public function usuarioRol()
    {
        return('Lista de roles');
    }
}
