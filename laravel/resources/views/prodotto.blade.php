{{-- SEZIONE MAIN PRODOTTO  --}}
@extends('layouts.app')

{{-- SEZIONE PER TITOLO DOCMENT --}}
@section('title',$pasta['titolo'])

{{-- SEZIONE PER MAIN PRODOTTO  --}}
@section('content-main')

{{-- BOX GENERALE MAIN  --}}
<div class="box-main-prodotto">

    <h1>{{ $pasta['titolo'] }}</h1>

    {{-- BOX PRODOTTO  --}}
    <div class="box-prodotto">

        {{-- BOX IMG PRODOTTO  --}}
        <div class="box-img">
            <img src="{{ $pasta['src-h'] }}" alt="{{$pasta['tipo']}}">
            <img src="{{ $pasta['src-p'] }}" alt="{{$pasta['tipo']}}">
        </div>
        {{-- BOX IMG PRODOTTO  --}}

        {{-- BOX INFO PRODOTTO  --}}
        <div class="box-info">

            {{-- BOX DESCRIZIONE PRODOTTO  --}}
            <div class="descrizione-prodotto">
                <h3>Descrizione</h3>
                <p>{!! $pasta['descrizione'] !!} </p>
            </div>
            {{-- FINE BOX DESCRIZIONE PRODOTTO  --}}

            {{-- BOX INFO PRODOTTO  --}}
            <div class="info-prodotto">

                {{-- INFO TOP  --}}
                <div class=" box top">
                    <p >GRANO DECORTIFICATO A PIETRA </p>
                    <p class="center"><img src="{{ asset('img/logo.png') }}" alt=""></p>
                    <p> TRAFILATURA AL BRONZO</p>
                </div>
                {{--FINE INFO TOP  --}}

                {{-- INFO BOTTOM  --}}
                <div class=" box bottom">
                    <p><i class="fas fa-utensils"></i><span> {{ $pasta['tipo'] }} </span> </p>
                    <p class="center"><i class="fas fa-weight"></i><span> {{ $pasta['peso'] }} </span> </p>
                    <p><i class="fas fa-stopwatch"></i><span> {{ $pasta['cottura'] }} </span> </p>
                </div>
                {{--FINE INFO BOTTOM  --}}

            </div>
            {{-- FINE BOX INFO PRODOTTO  --}}

        </div>
        {{--FINE BOX INFO PRODOTTO  --}}

    </div>
    {{-- BOX PRODOTTO  --}}

</div>
{{-- FINE BOX GENERALE MAIN  --}}

@endsection
{{-- FINE SEZIONE PER MAIN PRODOTTO  --}}
