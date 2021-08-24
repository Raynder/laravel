
<pre>
{{print_r($errors)}}
</pre>
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{ $class }}">
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="{{ $class }}">
    <br>
    {{ $slot }}
    <select name="motivo_contato" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $class }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
