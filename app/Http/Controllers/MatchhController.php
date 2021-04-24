<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matchh;

class MatchhController extends Controller
{
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
}
