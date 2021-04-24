<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardarusuario(Request $data){
        $usuario = new Usuario();
        $usuario->nombre = $data["nombre"];
        $usuario->apellido = $data["apellido"];
        $usuario->edad = $data["edad"];
        $usuario->ubicacion = $data["ubicacion"];
        $usuario->correo = $data["correo"];
        $usuario->contraseña = $data["contraseña"];
        $usuario->save();
        return "Usuario guardado";
    }

    public function mostarusuario(){
        $resultado = Usuario::where("id",1)->get();
        return view("mostarusuario",["resultado"=>$resultado]);
    }
}
