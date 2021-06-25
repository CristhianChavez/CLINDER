<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Matchh;
use App\Models\User;/********************************/
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\False_;

class MatchhController extends Controller
{
    public $amigoId = 0;
    public function guardarmatchh(Request $data){
        $matchh = new Matchh();
        $matchh->amigo_id = $data["amigo_id"];
        $matchh->user_id = $data["user_id"];
        $matchh->aceptar = $data["aceptar"];
        $matchh->save();
        return "Match guardado";
    }

    public function mostarmattchh(){
        $resultado = Matchh::where("id",1)->get();
        return view("mostarmatchh",["resultado"=>$resultado]);
    }

    public function vermatchh(Request $data){
        $match = new Matchh();
        $match->amigo_id = $data["elid"];
        $match->aceptar = $data["respuesta"];
        $match->user_id = Auth::id();
        $match->save();
        return redirect(RouteServiceProvider::HOME);
    }

    public function nosematchh(Request $data){
        $this->amigoId = $data["elid"];
    }

    public function verificarmatch(){

        $resultado = Matchh::where("user_id",Auth::id())
            ->where("amigo_id",$this->amigoId)
            ->first();
        if($resultado === null ){
            $existematch = 0;
        }else{
            $existematch = 1;
        }

        return $existematch;
    }

    public function verimensaje(){
        $mensaje = new Matchh();

        $result = $mensaje::select("matchhs.amigo_id")
            ->join("users", "matchhs.user_id","=","users.id")
            ->join("fotos", "fotos.iduser", "=", "users.id")
            ->get();
        return ["resultado"=>$result];
    }

    public function mostarmensaje()
    {
        $mensaje = new User();
        $horas = $this->verimensaje();
        /******************NOSE COMO HACER UN WHERE CON UN ARRAY***********************/
        $resultados = $mensaje::select("fotos.fotos", "users.nombre", "users.apellido", "users.edad", "users.id as idunico")
            ->join("fotos", "fotos.iduser", "=", "users.id")
            ->whereIn("users.id", 3)->get();


        return view("mensajes",["resultado"=>$resultados]);
    }
}
