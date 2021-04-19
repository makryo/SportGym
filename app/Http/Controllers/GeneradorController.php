<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class GeneradorController extends Controller
{
    public function imprimir(){
        $pdf = \PDF::loadView('pdf/pdf');
        return $pdf->download('Informe clientes.pdf');
   }
}
