<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example extends Controller
// abstract class Example
{
    public function myfunction()
    {
        // Aquí puedes preparar datos para tu vista
        $datos = [
            'titulo' => 'Mi primera vista en Laravel',
            'mensaje' => 'Hola desde el controlador'
        ];

        // Retorna la vista con los datos
        return view('example.function', $datos);
    }
}