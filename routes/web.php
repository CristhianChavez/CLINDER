<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MatchhController;
use App\Http\Controllers\FormularioController;

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
    return view('welcome');
});
Route::view("/registar-usuario","registarUsuario");
Route::post("/registar-usu",[UsuarioController::class, "guardarusuario"])->name("Guardar Usuario");

Route::get('/mostar-usuario',[UsuarioController::class, "mostarusuario"]);
Route::get('/mostar-formulario',[FormularioController::class, "mostarformulario"]);
Route::get('/mostar-match',[MatchhController::class, "mostarmatch"]);
