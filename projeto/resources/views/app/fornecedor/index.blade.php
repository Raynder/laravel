<h1>Fornecedores aqui</h1>


@php
  


@endphp

{{-- @dd($fornecedores) --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Exite mais de 10 fornecedores cadastrados</h3>
@else
    <h3>Não existe fornecedores cadastrados</h3>
@endif