{{-- SEZIONE MAIN CONTATTI  --}}
@extends('layouts.app')

{{-- SEZIONE PER TITOLO DOCUMENT --}}
@section('title','Sezione-Contatti')

{{-- SEZIONE PER ELEMENTI MAIN CONTATTI  --}}
@section('content-main')

    {{-- Box main contatti up --}}
    <div class="jumbo-contatti">
        <img src="{{ asset('images/footer-montagne-bottom.jpg') }}" alt="">
    </div>
    {{--Fine Box main contatti up --}}
    
    {{-- Box main contatti down  --}}
    <div class="altre-info">
        <p>Contattaci al numero verde: <span>800.818081</span> </p>
        <p>WhatsApp: <span>380.1292455</span></p>
        <p>Email Area Commerciale: <span>COMMERCIALE@GMAIL.COM</span></p>
        <p>Email Area Export: <span>EXPORTLAMOLISANA@GMAIL.COM</span></p>
    </div>
    {{--Fine Box main contatti down  --}}

@endsection
{{--FINE SEZIONE PER ELEMENTI MAIN CONTATTI  --}}