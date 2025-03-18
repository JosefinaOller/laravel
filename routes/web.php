<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function(){
    return view('inicio');
});

Route::get('/suma',[SumaController::class, 'index']);

Route::post('/suma', function(Request $request){

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado = $num1 + $num2;

    return view ('suma',['resultado'=> $resultado]);
});