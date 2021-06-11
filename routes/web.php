<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
Route::view('/registro-perfil','registroperfil')->middleware('auth');

Route::get('/mostar-perfil',[PelfilController::class,"visualizarelperfil"])->name('mostar-perfil')->middleware('auth');

Route::get('/modificar-perfil',[PelfilController::class,"modificarperfilvista"])->middleware('auth');
Route::post("/modificar-perfil",[PelfilController::class, "modificarplefil"])->name("modificarperfil")->middleware('auth');

Route::view('/mostar-user',"visualizaruser")->middleware('auth');

Route::view("/subir-foto","subirfoto")->middleware('auth');
Route::post("/subir-foto",[FotoController::class, "subirfoto"])->name("subirfoto");
Route::get('/subir-foto',[PelfilController::class,"mostargenero"])->middleware('auth');



Route::get('/mostar-match',[MatchhController::class, "mostarmatch"]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


