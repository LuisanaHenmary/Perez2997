<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\PaqueteController;
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

Route::get('/', [RutasController::class,'principal'] )->name('pagprincipal');

Route::get('ingreso', [RutasController::class,'ingreso'])->name('ingreso');

Route::get('registro', [RutasController::class,'registro'])->name('registro');

Route::post('ingreso',[UsuarioController::class,'ingresar'])->name('ingreso');

Route::post('registro',[UsuarioController::class,'registrar'])->name('registro');




Route::get('/administradores/',[RutasController::class,'inicio'])->name('administradores.home');

Route::get('/administradores/paquete', [RutasController::class,'paquete'])->name('administradores.paquete');

Route::post('/administradores/paquete',[PaqueteController::class,'creaPaquete'])->name('administradores.paquete');



Route::get('/suscriptores/',[RutasController::class,'inicio2'])->name('suscriptores.home2');

Route::get('/suscriptores/servicios',[RutasController::class,'catalogo'])->name('suscriptores.servicios');



