<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use App\User;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /* Funcion que genera los cupones*/
    public function generateCupon(Request $request)
    {
        if(!$request->user) {
            return response()->json('User must be logged', 404);
        }
    
        $code = uniqid();
    
        $user = User::find($request->user['id']);
        $cupon = $user->codes()->create(['uuid' => $code]);
    
        return response()->json($cupon, 200);
    }
    /* Funcion que Canjea el cupon */ 
    public function validateCupon(Request $request)
    {
        if(!$request->cupon) {
            return response()->json('Cupon not found', 404);
        }
        
        $cupon = Code::find($request->cupon['id']);
        $cupon->status = 1;
        $cupon->save();
    
        return response()->json('Cupon ' . $cupon->uuid . ' activado correctamente', 200);
    }
}
