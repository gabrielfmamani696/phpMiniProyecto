<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function metodo(): View {
        //conexion a la tabla con eloquent
        //find busca por id, al 1 en este caso
        $user = User::find(1);
        //vardump die
        // die(var_dump($user));
        // dd($user);
        return view("index", [
            'users' => $user
        ]);
    }
}
