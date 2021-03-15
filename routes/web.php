<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\PaqueteController;

Route::get('/', [RutasController::class,'principal'] )->name('pagprincipal');
Route::get('ingreso', [RutasController::class,'ingreso'])->name('ingreso');
Route::get('registro', [RutasController::class,'registro'])->name('registro');
Route::get('/administradores/',[RutasController::class,'inicio'])->name('administradores.home');
Route::get('/administradores/paquete/', [RutasController::class,'paquete'])->name('administradores.paquete');
Route::get('/administradores/canales/', [RutasController::class,'canales'])->name('administradores.canales');
Route::get('/suscriptores/{usuario}',[RutasController::class,'inicio2'])->name('suscriptores.home2');
Route::get('/suscriptores/{usuario}/inicio/',[RutasController::class,'catalogo'])->name('suscriptores.servicios');
Route::get('/suscriptores/{usuario}/servicios/informacion/{paquete}',[RutasController::class,'infProduct'])->name('suscriptores.informacion');

Route::post('ingreso',[UsuarioController::class,'ingresar'])->name('ingreso');
Route::post('registro',[UsuarioController::class,'registrar'])->name('registro');
Route::post('/suscriptores/servicios/comprar/',[UsuarioController::class,'comprar'])->name('suscriptores.comprar');
Route::post('solicitando',[UsuarioController::class,'solicitar'])->name('suscriptores.solicitar');
Route::post('borrar',[UsuarioController::class,'borrar'])->name('administrador.borrar');

Route::post('/administradores/paquete',[PaqueteController::class,'creaPaquete'])->name('administradores.paquete');
Route::post('/administradores/canales',[PaqueteController::class,'guardCanal'])->name('administradores.canales');














