<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\MatchhController;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }



    protected function visualizareluser(){
        //$idsesion = auth()->id();
        //$resultado = User::where("id",1)->get();
        return view("visualizaruser");//,["resultado"=>$resultado]);
    }



}
