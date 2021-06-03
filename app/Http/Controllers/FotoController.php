<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    protected function subirfoto(Request $data)
    {
        $data->validate([
            'fotos' => ['required'],
        ]);

        $foto = new Foto();
        $foto->fotos = $data["fotos"];
        $foto->perfil = true;
        $foto->iduser = auth()->id();
        $foto->save();
        return redirect(RouteServiceProvider::HOME);
    }

}
