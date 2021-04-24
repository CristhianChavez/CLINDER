<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function guardarformulario(Request $data){
    $formulario = new Formulario();
    $formulario->prefecita = $data["prefecita"];
    $formulario->orientacion = $data["orientacion"];
    $formulario->altura = $data["altura"];
    $formulario->religion = $data["religion"];
    $formulario->etnia = $data["etnia"];
    $formulario->educacion = $data["educacion"];
    $formulario->id_usuario = $data["id_usuario"];
    $formulario->save();
    return "Formulario guardado";
}

    public function mostarformulario(){
        $resultado = Formulario::where("id",1)->get();
        return view("mostarformulario",["resultado"=>$resultado]);
    }
}
