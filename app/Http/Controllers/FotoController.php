<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    protected function subirfoto(Request $request)
    {
        $nombre = $request->file('imgInp')->getClientOriginalName();
        $ruta = $request->file('imgInp')->storeAs('public/image',$nombre);

        $foto = new Foto();
        $foto->fotos = $ruta;
        $foto->perfil = true;
        $foto->iduser = auth()->id();
        $foto->save();

        return redirect(route('home'));
    }

    public function mostarfoto(){
            $resultadosa = Foto::where("iduser",Auth::id())->get();
            return view("home",["resultadosa"=>$resultadosa]);
    }

}
