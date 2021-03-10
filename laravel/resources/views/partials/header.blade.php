{{-- BOX: Header  --}}
<header>
    {{-- Container header  --}}
    <div class="container">
        
        {{-- Box logo  --}}
        <div class="box log">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        {{--End Box logo  --}}
        
        {{-- Box sezioni link pagine  --}}
        <div class="box sezione">
            <nav>
                <ul>
                    <li class="{{ Request::route()->getName() == 'pagina_home' ? 'active' : '' }}"><a href="{{ route('pagina_home') }}" > <strong>HOME</strong> </a></li>
                    <li class="{{ Request::route()->getName() == 'pagina_prodotti' ? 'active' : '' }}"><a href="{{ route('pagina_prodotti') }}" > <strong>PRODOTTI</strong> </a></li>
                    <li class="{{ Request::route()->getName() == 'pagina_novità' ? 'active' : '' }}"><a href="{{ route('pagina_novità') }}" > <strong>CONTATTACI</strong> </a></li>
                </ul>
            </nav>
        </div>
        {{--End Box sezioni link pagine  --}}

    </div>
    {{-- End Container header   --}}

</header>
{{--END BOX: Header  --}}