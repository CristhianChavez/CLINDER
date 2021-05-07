<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function destroy(Request $request)
    {
       $idsesion = $request->session()-get('id');
        User::destroy($idsesion);
        User::deleted($idsesion);
        return redirect('/home');
    }



}
