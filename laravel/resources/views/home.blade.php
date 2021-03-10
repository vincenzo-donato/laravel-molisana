{{-- SEZIONE MAIN HOME  --}}
@extends('layouts.app')

{{-- SEZIONE HOME TITLE --}}
@section('title','sezione-home')
    
{{-- SEZIONE HOME STRUCTURE --}}
@section('content-main')

    {{-- Box jumbo up  --}}
    <div class="box-home up">
        <div class="jumbotron">
            <h1>La Molisana, dove le buone idee prendono forma</h1>
            <div class="box-hide">
                <h3>La Molisana ha una storia di ben 100 anni.</h3>
                <p><strong>1912</strong></p>
                <h3>LA NASCITA DEL PASTIFICIO <strong>LA MOLISANA</strong></h3>
                <p>Dalle terre incontaminate del Molise nasce il pastificio La Molisana, fondata dalla famiglia Carlone, come bottega artigianale. Nel giro di pochi decenni si afferma come azienda leader nel settore della produzione di pasta di semola, grazie all'ottima qualità del prodotto.</p>
            </div>
        </div>
    </div>
    {{--End Box jumbo up  --}}
    
    {{-- Box center   --}}
    <div class="box-home-center">
        <h2>2019</h2>
        <h3>PREMIO LEONARDO</h3>
        <p>Nel 2019 alla presenza del Presidente del Consiglio dei Ministri, del ministro dello sviluppo economico, del presidente del comitato Leonardo e di alti rappresentanti istituzionali, La Molisana riceve il premio Qualità italiana 2019, come emblema di eccellenza nazionale ed espressione del made in itali sui mercati globali.</p>
    </div>
    {{--End Box center  --}}

    {{-- Box jumbo down  --}}
    <div class="box-home down">
        <div class="jumbotron">
            <h2>Vai a dare un'occhiata ai nostri prodotti!!!</h2>
            <h3>Ne abbiamo di tutti i gusti.</h3>
        </div>
    </div>
    {{--End Box jumbo down  --}}

@endsection
{{-- SEZIONE HOME STRUCTURE --}}
