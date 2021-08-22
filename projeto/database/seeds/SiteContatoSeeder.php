<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();

        // $contato->nome = 'Sistema SG';
        // $contato->telefone = '(62) 99999-8888';
        // $contato->email = 'contato@sg.com.br';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Seja bém vindo ao sistema super gertão';
        // $contato->save();

        factory(SiteContato::class, 100)->create();
    }
}
