<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Pelfil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PelfilController extends Controller
{

    protected function createplefil(Request $data)
    {
         $data->validate([
            'generoo' => ['required', 'string', 'min:3', 'max:255'],
            'orientacion' => ['required', 'string', 'min:3', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],
            'educacion' => ['required', 'string', 'min:8'],
            'telefono' => ['required', 'int'],
            'descripcion' => ['required', 'string', 'min:20', 'max:500'],
        ]);

        $pelfil = new Pelfil();
        $pelfil->generoo = $data["generoo"];
        $pelfil->orientacion = $data["orientacion"];
        $pelfil->ciudad = $data["ciudad"];
        $pelfil->relationship = $data["relationship"];
        $pelfil->educacion = $data["educacion"];
        $pelfil->telefono = $data["telefono"];
        $pelfil->descripcion = $data["descripcion"];
        $pelfil->user_id = Auth::id();
        $pelfil->save();
        return redirect(route('subirfoto'));
    }

    protected function modificarplefil(Request $data)
    {
        $pelfil = Pelfil::find(Auth::id());
        $pelfil->generoo = $data["generoo"];
        $pelfil->orientacion = $data["orientacion"];
        $pelfil->ciudad = $data["ciudad"];
        $pelfil->relationship = $data["relationship"];
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
        $pelfil = new Pelfil();
        $resultado = $pelfil::select("pelfils.generoo","pelfils.orientacion","pelfils.ciudad","pelfils.relationship",
            "pelfils.educacion","pelfils.telefono","pelfils.descripcion","fotos.fotos")
            ->join("users", "pelfils.user_id","=","users.id")
            ->join("fotos", "fotos.iduser","=","users.id")
            ->where("pelfils.user_id", Auth::id())
            ->get();
        return view("visualizarperfil",["resultado"=>$resultado]);
    }

    public function modificarperfilvista(){
        $pelfil = new Pelfil();
        $resultado = $pelfil::select("pelfils.generoo","pelfils.orientacion","pelfils.ciudad","pelfils.relationship",
            "pelfils.educacion","pelfils.telefono","pelfils.descripcion")
            ->where("user_id",Auth::id())->first();
            return view("modificarperfil",["resultado"=>$resultado]);
    }

    public function mostargenero()
    {
        $pelfil = new Pelfil();
        $data = $pelfil::select("pelfils.generoo")
            ->join("users", "pelfils.user_id", "=", "users.id")
            ->where("pelfils.user_id", Auth::id())
            ->get();
        foreach ($data as $gener) {

            if ($gener["generoo"] != 'Mujer' && $gener["generoo"] != 'Hombre') {
                $respuesta = "https://i.ibb.co/S7w86d5/defaultotro.jpg";
            } elseif ($gener["generoo"] == 'Hombre') {
                $respuesta = "https://i.ibb.co/0G5LYCh/defaulthombre.png";
            } elseif ($gener["generoo"] == 'Mujer') {
                $respuesta = "https://i.ibb.co/FzXZDpB/defaultfmujer.jpg";
            }
        }
        return view("subirfoto", ["data"=>$respuesta]);
    }
}
