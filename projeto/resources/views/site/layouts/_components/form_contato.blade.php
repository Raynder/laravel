
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
    @foreach ($motivo_contato as $key => $motivo)
        <option {{old('motivo_contato') == $key ? 'selected' : ''}} value={{$key}}>{{$motivo}}</option>
    @endforeach
        <option value="1" {{old('motivo_contato') == 1 ? 'selected' : ''}}>Dúvida</option>
        <option value="2" {{old('motivo_contato') == 2 ? 'selected' : ''}}>Elogio</option>
        <option value="3" {{old('motivo_contato') == 3 ? 'selected' : ''}}>Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $class }}">@if(old('mensagem') != ''){{old('mensagem')}}@else Preencha aqui sua mensagem @endif</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
