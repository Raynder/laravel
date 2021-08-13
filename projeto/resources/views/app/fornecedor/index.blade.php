<h1>Fornecedores aqui</h1>


@php
  


@endphp

{{-- @dd($fornecedores) --}}

Fornecedor: {{$fornecedores[0]['nome']}}<br>
Status: {{$fornecedores[0]['status']}}

@unless($fornecedores[0]['status'] == 'S')
    <h3>Fornecedor inativo</h3>
@endunless
