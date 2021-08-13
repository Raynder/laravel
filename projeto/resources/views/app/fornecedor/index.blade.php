<h1>Fornecedores aqui</h1>


@php
  


@endphp

{{-- @dd($fornecedores) --}}

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}<br>
    Status: {{$fornecedores[0]['status'] ?? 'status não informado'}}<br>
    @isset($fornecedores[0]['cnpj'])
        Cnpj: {{$fornecedores[0]['cnpj'] ?? 'cnpj não informado'}}
        @empty($fornecedores[0]['cnpj'])
            -vazio
        @endempty
        <br><br>
    @endisset
    
    Fornecedor: {{$fornecedores[1]['nome']}}<br>
    Status: {{$fornecedores[1]['status'] ?? 'status não informado'}}<br>
    @isset($fornecedores[1]['cnpj'])
        Cnpj: {{$fornecedores[1]['cnpj'] ?? 'cnpj não informado'}}
        @empty($fornecedores[1]['cnpj'])
            -vazio
        @endempty
        <br><br>
    @endisset
    
    Fornecedor: {{$fornecedores[2]['nome']}}<br>
    Status: {{$fornecedores[2]['status'] ?? 'status não informado'}}<br>
    @isset($fornecedores[2]['cnpj'])
        Cnpj: {{$fornecedores[2]['cnpj'] ?? 'cnpj não informado'}}
        @empty($fornecedores[2]['cnpj'])
            -vazio
        @endempty
        <br><br>
    @endisset
@endisset
