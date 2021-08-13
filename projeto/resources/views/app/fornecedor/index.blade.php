<h1>Fornecedores aqui</h1>


@php
  


@endphp

{{-- @dd($fornecedores) --}}

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}<br>
    Status: {{$fornecedores[0]['status']}}<br>
    @isset($fornecedores[0]['cnpj'])
        Cnpj: {{$fornecedores[0]['cnpj']}}<br><br>
    @endisset
    
    Fornecedor: {{$fornecedores[1]['nome']}}<br>
    Status: {{$fornecedores[1]['status']}}<br>
    @isset($fornecedores[1]['cnpj'])
        Cnpj: {{$fornecedores[1]['cnpj']}}<br><br>
    @endisset
    
    Fornecedor: {{$fornecedores[2]['nome']}}<br>
    Status: {{$fornecedores[2]['status']}}<br>
    @isset($fornecedores[2]['cnpj'])
        Cnpj: {{$fornecedores[2]['cnpj']}}<br><br>
    @endisset
@endisset
