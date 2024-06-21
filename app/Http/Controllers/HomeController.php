<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(string $nombre, string $apellido, string $correo=null){
        if ($correo != null){
            echo 'Hola: '.' '.$nombre.' '.$apellido. 'su correo es: '.$correo;
        }
        else{
            echo 'Hola: '.' '.$nombre.' '.$apellido;
        }
    }

    public function datos(string $nombre, int $edad, string $direccion ){
        /*return view('prueba', ['nombre'=>$nombre,
                               'edad'=> $edad,
                               'direccion'=>$direccion]);*/

        return view('prueba', compact('nombre', 'edad', 'direccion'));
    }

}
