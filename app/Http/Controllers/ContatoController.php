<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{


    public function enviarContato(Request $request)
    {
        return view('tabela', ['titulo' => 'Contato(teste)']);
    }
}
