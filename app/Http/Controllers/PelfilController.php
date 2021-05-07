<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Pelfil;
use Illuminate\Support\Facades\Validator;

class PelfilController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'generoo' => ['required', 'string', 'min:3', 'max:255'],
            'orientacion' => ['required', 'string', 'min:3', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],
            'educacion' => ['required', 'string', 'min:8'],
            'telefono' => ['required', 'int'],
            'descripcion' => ['required', 'string', 'min:20', 'max:500'],
        ]);
    }

    protected function createplefil(Request $data)
    {
        $pelfil = new Pelfil();
        $pelfil->generoo = $data["generoo"];
        $pelfil->orientacion = $data["orientacion"];
        $pelfil->ciudad = $data["ciudad"];
        $pelfil->educacion = $data["educacion"];
        $pelfil->telefono = $data["telefono"];
        $pelfil->descripcion = $data["descripcion"];
        $pelfil->save();
        return redirect(RouteServiceProvider::HOME);
    }

    public function sesionusu(Request $request)
    {
        $idsesion = $request->session()-get('id');
        return "$idsesion";
    }

    public function visualizarelperfil(){
        $idsesion = auth()->id();
        $resultadopel = Pelfil::where("id",$idsesion)->get();
        return view("visualizarperfil",["resultado"=>$resultadopel]);
    }
}
