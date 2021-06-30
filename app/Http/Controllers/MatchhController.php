<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Matchh;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\False_;

class MatchhController extends Controller
{

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

    public function verimensaje(){
        $mensaje = new Matchh();

        $result = $mensaje::select("matchhs.amigo_id")
            ->where("user_id", Auth::id())
            ->get();
        return ["resultado"=>$result];
    }

}
