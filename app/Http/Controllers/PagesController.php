<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use App\User;

class PagesController extends Controller
{
    public function home()
    {
        
        return view('welcome');
        
    }

    public function promociones()
    {
        
        $codes = Code::all();

        return view('promociones', [
            'codes' => $codes
        ]);
    }
}
