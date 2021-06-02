<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MatchhController;
use App\Http\Controllers\PelfilController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/mostar-perfil',[PelfilController::class,"visualizarelperfil"])->name('mostar-perfil');
Route::get('/modificar-perfil',[PelfilController::class,"modificarperfilvista"]);
Route::post("/modificar-perfil",[PelfilController::class, "modificarplefil"]);

Route::view('/mostar-user',"visualizaruser");

Route::view("/registar-usuario","registarUsuario");
Route::post("/registar-usu",[UsuarioController::class, "guardarusuario"])->name("Guardar Usuario");

Route::view("/subir-foto","subirfoto");
Route::post("/subir-foto",[FotoController::class, "subirfoto"])->name("subirfoto");
Route::get('/subir-foto',[PelfilController::class,"mostargenero"]);

Route::get('/mostar-usuario',[UsuarioController::class, "mostarusuario"]);
Route::get('/mostar-match',[MatchhController::class, "mostarmatch"]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/registroperfil', function (){ return view('registroperfil'); });
