<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcularEdadController extends Controller
{
    public function calcularEdad($edad) {
        if($edad > 0 && $edad < 18) {
            return 'eres menor de edad';
        } elseif ($edad >= 18 && $edad<=100){
            return 'ERES MAYOR DE EDAD';
        } else {
            return 'Edad erronea';
        }
    }
}
