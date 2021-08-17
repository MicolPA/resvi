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

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

// rutas para el index
Route::get('/',[HomePageController::class,'index'])->name('index');
// rutas para admin
Route::middleware(['auth:sanctum', 'verified'])->get('/admin',[DashboardController::class,'index'])->name('inicio');
//rutas para ServiciosController
Route::middleware(['auth:sanctum', 'verified'])->get('servicios/normales',[ServiciosController::class,'serviciosNormales'])->name('servicios.Normales');
Route::middleware(['auth:sanctum', 'verified'])->get('servicios/normales/boleto',[ServiciosController::class,'serviciosNormalesBoleto'])->name('servicios.Normales.boleto');
Route::middleware(['auth:sanctum', 'verified'])->get('servicio/personalizados',[ServiciosController::class,'servicioPersonalizados'])->name('servicios.Personalizados');
Route::middleware(['auth:sanctum', 'verified'])->get('servicio/personalizados/boleto',[ServiciosController::class,'servicioPersonalizadosBoleto'])->name('servicios.Personalizados.boleto');
Route::middleware(['auth:sanctum', 'verified'])->get('servicio/pro',[ServiciosController::class,'servicioPro'])->name('servicios.Pro');
Route::middleware(['auth:sanctum', 'verified'])->get('servicio/pro/boleto',[ServiciosController::class,'servicioProBoleto'])->name('servicios.Pro.boleto');
Route::middleware(['auth:sanctum', 'verified'])->get('servicio/envio',[ServiciosController::class,'servicioEnvio'])->name('servicios.Envio');
Route::middleware(['auth:sanctum', 'verified'])->get('servicio/envio/boleto',[ServiciosController::class,'servicioEnvioBoleto'])->name('servicios.Envio.boleto');
//rutas para Conductores
Route::middleware(['auth:sanctum', 'verified'])->get('conductores/lista',[ConductoresController::class,'conductoresVerLista'])->name('conductores.VerLista');
//rutas para usuarios
Route::middleware(['auth:sanctum', 'verified'])->get('usuarios/lista',[UsuariosController::class,'usuarioLista'])->name('usuario.Lista');
Route::middleware(['auth:sanctum', 'verified'])->get('usuarios/rol',[UsuariosController::class,'usuarioRol'])->name('usuario.Rol');
//rutas para documentacion
Route::middleware(['auth:sanctum', 'verified'])->get('documentacion/',[DocumentacionController::class,'index'])->name('documentacion.index');
