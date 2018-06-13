<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //Funcion que muestra la vista welcome
    public function home()
    {
        return view('welcome');
    }

    //Funcion que muestra la vista de cupones y busca los cupones del usuario
    public function cupones()
    {
        if (Auth::check()){

            $codes = Auth::user()->codes;

            return view('cupones', [
                'codes' => $codes
            ]);
        }else{
            return view('cupones');
        }
    }
}
