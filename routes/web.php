<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ConductoresController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DocumentacionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// rutas para el index
Route::get('/',[HomePageController::class,'index'])->name('index');
// rutas para admin
Route::get('/admin',[DashboardController::class,'index'])->name('inicio');
//rutas para ServiciosController
Route::get('servicios/normales',[ServiciosController::class,'serviciosNormales'])->name('servicios.Normales');
Route::get('servicio/personalizados',[ServiciosController::class,'servicioPersonalizados'])->name('servicios.Personalizados');
Route::get('servicio/pro',[ServiciosController::class,'servicioPro'])->name('servicios.Pro');
Route::get('servicio/envio',[ServiciosController::class,'servicioEnvio'])->name('servicios.Envio');
//rutas para Conductores
Route::get('conductores/lista',[ConductoresController::class,'conductoresVerLista'])->name('conductores.VerLista');
//rutas para usuarios
Route::get('usuarios/lista',[UsuariosController::class,'usuarioLista'])->name('usuario.Lista');
Route::get('usuarios/rol',[UsuariosController::class,'usuarioRol'])->name('usuario.Rol');
//rutas para documentacion
Route::get('documentacion/',[DocumentacionController::class,'index'])->name('documentacion.index');
