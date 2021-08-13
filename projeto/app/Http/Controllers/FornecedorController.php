<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' =>'fornecedor 1',
                'status' => 'N',
                'cnpj' => ''
            ],
            1 => [
                'nome' =>'fornecedor 2',
                'status' => 'N',
                'cnpj' => '00000000000'
            ],
            2 => [
                'nome' =>'fornecedor 3',
                'status' => 'N'
            ]
        ];

        echo isset($fornecedores[1]['cnpj']) ? 'cnpj informado' : 'cnpj não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
