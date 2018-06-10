<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;

class WelcomeController extends Controller
{
    protected function cerateCode(Request $request, $id)
    {
        $promo = Code::create([
            'code' => 123,
            'user_id' =>  Auth::user()->id,
        ]);
    }
}