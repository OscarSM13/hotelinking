<?php

use App\Code;
use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/generateCupon', function (Request $request) {
    if(!$request->user) {
        return response()->json('User must be logged', 404);
    }

    $code = uniqid();

    $user = User::find($request->user['id']);
    $cupon = $user->codes()->create(['uuid' => $code]);

    return response()->json($cupon, 200);
});

Route::post('/validateCupon', function (Request $request) {
    if(!$request->cupon) {
        return response()->json('Cupon not found', 404);
    }

    $cupon = Code::find($request->cupon['id']);
    $cupon->status = 1;
    $cupon->save();

    return response()->json('Cupon ' . $cupon->uuid . ' activado correctamente', 200);
});
