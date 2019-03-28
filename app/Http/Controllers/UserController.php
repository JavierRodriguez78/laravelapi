<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {//validar que el usuario existe en la bd
            $user = Auth::user();//obtenemos el usuario logueado
            $success['token'] =  $user->createToken('MyApp')->accessToken; //creamos el token
            return response()->json(['success' => $success], 200);//se lo enviamos al usuario
        } else {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], 200);
    }
}
