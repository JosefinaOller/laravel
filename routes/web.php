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

Route::post('/suma',[SumaController::class, 'suma']);