<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SiteContato;

class ContatoController extends Controller
{
    public function principal(Request $request){

        $motivo_contato = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];
        return view('site.contato', ['titulo' => 'Contato2', 'motivo_contato' => $motivo_contato]);

    }

    public function salvar(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'email' => 'required',
            'telefone' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        //SiteContato::create($request->all());

    }
}
