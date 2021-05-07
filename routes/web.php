<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MatchhController;
use App\Http\Controllers\PelfilController;
use App\Http\Controllers\UserController;

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


Route::view("/","welcome");
Route::post("/registro-perfil",[PelfilController::class, "createplefil"])->name("registarPerfil");
//Route::view("/perfil","visualizarperfil");
//Route::get("/perfil",function (){
 //   [PelfilController::class, "mostarpelfil"];
  //  return view('visualizarperfil'); });
Route::get('/mostar-perfil',[PelfilController::class,"visualizarelperfil"]);

Route::post("/eliminar-usuario",[UserController::class, "eliminaruser"]);


Route::view("/registar-usuario","registarUsuario");
Route::post("/registar-usu",[UsuarioController::class, "guardarusuario"])->name("Guardar Usuario");

Route::get('/mostar-usuario',[UsuarioController::class, "mostarusuario"]);
Route::get('/mostar-match',[MatchhController::class, "mostarmatch"]);


Route::resource('user',UserController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/registroperfil', function (){ return view('registroperfil'); });
