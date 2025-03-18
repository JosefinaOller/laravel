<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function(){
    return view('inicio');
});

Route::get('/suma', function(){
    return view ('suma');
});

Route::post('/suma', function(Request $request){

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado = $num1 + $num2;

    return view ('suma',['resultado'=> $resultado]);
});