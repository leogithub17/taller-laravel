<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hojasdevidaController extends Controller
{
   public function HdvErvin()
    {
       // echo "Hola mundo";
        return view('hojadevida/ervin');
    }

    public function Hdvleonardo()
    {
          return view('hojadevida/leonardo');
    }
    public function FormularioEncuesta()
    {
          return view('encuesta/llenarencuesta');
    }
}
