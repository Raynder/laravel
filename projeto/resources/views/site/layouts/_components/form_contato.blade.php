
<pre>
{{print_r($errors)}}
</pre>
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome')}}" class="{{ $class }}">
    <br>
    <input type="text" name="telefone" value="{{ old('telefone')}}" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input type="text" name="email" value="{{ old('email')}}" placeholder="E-mail" class="{{ $class }}">
    <br>
    {{ $slot }}
    <select name="motivo_contato" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $class }}">
    @if(old('mensagem') != '')
        {{old('mensagem')}}
    @else
        Preencha aqui sua mensagem
    @endif
    </textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
