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

Route::get('home',[RutasController::class,'inicio'])->name('home');

Route::get('home2',[RutasController::class,'inicio2'])->name('home2');

Route::get('/administradores/paquete', [RutasController::class,'paquete'])->name('administradores.paquete');


Route::post('home',[UsuarioController::class,'ingresar'])->name('home');

Route::post('ind',[UsuarioController::class,'registrar'])->name('ind');
