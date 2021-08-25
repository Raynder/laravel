<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SiteContato;

class ContatoController extends Controller
{
    public function principal(Request $request){

        // echo("<pre>");
        // print_r($request->input('nome'));
        // echo("</pre>");

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        //print_r($contato->getAttributes());
        //$contato->save();

        // $contato = new SiteContato();
        // $contato->fill($request->all());
        // $contato->save();

        // $contato = new SiteContato();
        // $contato->create($request->all());

        //Create e Fill só funcionam caso o $fillable esteja definido no model

        return view('site.contato', ['titulo' => 'Contato2']);

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
