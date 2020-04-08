<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.app');
});

// Gestion (Management)
    //Tickets
    //Asignacion
// Configuracion(Setting)
    //Tipos
    //Prioridades
// Reportes(Reports)
    //Creados
    //Pendientes

// Administracion
    //usuarios
    //roles
    //permisos(solo lectura)
