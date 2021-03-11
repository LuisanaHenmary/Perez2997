<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RutasController;
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


Route::get('/administradores/home',[RutasController::class,'inicio'])->name('administradores.home');

Route::get('/administradores/paquete', [RutasController::class,'paquete'])->name('administradores.paquete');


Route::get('/suscriptores/home2',[RutasController::class,'inicio2'])->name('suscriptores.home2');


Route::post('ingresando',[UsuarioController::class,'ingresar'])->name('ingresando');

Route::post('registrando',[UsuarioController::class,'registrar'])->name('registrando');
