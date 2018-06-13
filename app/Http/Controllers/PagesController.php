<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function cupones()
    {
        $codes = Auth::user()->codes;

        return view('cupones', [
            'codes' => $codes
        ]);
    }
}
