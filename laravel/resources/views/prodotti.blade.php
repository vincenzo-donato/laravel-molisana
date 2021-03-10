{{-- SEZIONE MAIN PRODOTTI  --}}
@extends('layouts.app')

{{-- SEZIONE TITOLO DOCUMENT MAIN PRODOTTI  --}}
@section('title','sezione-prodotti')

{{-- SEZIONE ELEMENTI MAIN PRODOTTI  --}}
@section('content-main')

    {{-- Box main prodotti  --}}
    <div class="container-prodotti">
        
        {{-- Primo ciclo per sezioni  --}}
        @foreach ($pasta as $k => $item)
        
        <h2>{{ $k }}</h2>
        
            {{-- Box prodotti  --}}
            <div class="prodotti">

                {{-- Secondo ciclo per elementi  --}}
                @foreach ($item as $key => $element)
                    {{-- Box prodotto  --}}
                    <div class="prodotto">
                        
                        {{-- Box img  --}}
                        <div class="box-img">
                            <img src="{{ $element['src'] }}" alt="">
                        </div>
                        {{-- Box img  --}}

                        {{-- Box info hide  --}}
                        <div class="box-info">
                            <a href="{{ route('pagina_prodotto', ['id' => $key]) }}">{{ $element['titolo'] }}</a>
                        </div>
                        {{-- Box info hide  --}}

                    </div>
                    {{--Fine Box prodotto  --}}

                    
                @endforeach
                {{--Fine Secondo ciclo per elementi  --}}

            </div>
            {{--Fine Box prodotti --}}

        @endforeach
        {{--Fine Primo ciclo per sezioni  --}}

    </div>
    {{--Fine Box main prodotti  --}}

@endsection
{{-- FINE SEZIONE ELEMENTI MAIN PRODOTTI  --}}
