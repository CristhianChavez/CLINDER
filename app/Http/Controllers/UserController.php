<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MatchhController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class UserController extends Controller
{

    public function mostarmensaje()
    {
        $mensaje = new User();
        $verificarmatch = new MatchhController();
        $ids_amigos = $verificarmatch->verimensaje()['resultado']->pluck('amigo_id')->toArray();

        $resultados = $mensaje::select("fotos.fotos", "users.nombre", "users.apellido", "users.edad", "users.id as idunico")
            ->join("fotos", "fotos.iduser", "=", "users.id")
            ->whereIn("users.id",$ids_amigos)->get();

        return view("mensajes",["resultado"=>$resultados]);
    }



}
