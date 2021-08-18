<div class="topo">

    <div class="logo">
        <img src="{{ asset('img/logo.png')}}">
    </div>
    <div class="menu">
        <ul>
            {{-- Este menu é para desenvolvimento local --}}

            <li><a href="{{ route('site.index') }}">Principal</a></li>
            <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>

            {{-- Este menu é para desenvolvendo online --}}

            <!-- <li><a href="/">Principal</a></li>
            <li><a href="/sobre-nos">Sobre Nós</a></li>
            <li><a href="/contato">Contato</a></li> -->
        </ul>
    </div>

</div>