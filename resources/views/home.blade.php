@extends("layout.main")

@section('title', 'pacchetti viaggi')


@section('contenuto')

@foreach ($travels as $travel)

    <div class="travel-card">
        <h3>Location: {{$travel->location}}</h3>
        <h4>Data partenza: {{$travel->date_start}}</h4>
        <h4>Data ritorno: {{$travel->date_end}}</h4>

        <p>Prezzo: {{$travel->price}}</p>


    </div>
    
@endforeach

@endsection