<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/saludo/{nombre}/{apellido}/{correo?}',[HomeController::class, 'home']);

Route::get('/mostrar/{nombre}/{edad}/{direccion}', [HomeController::class, 'datos']);