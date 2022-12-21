@extends('layouts.app')
@section('content')
    <h1>Treni in partenza dalla data odierna</h1>
    @forelse ($trains as $train)
        <li>
            <h3>
                {{ $train->departure_station }} - {{ $train->arrival_station }}
            </h3>
            <p>Partenza: {{ $train->departure_time }}</p>
            <p>Arrivo: {{ $train->arrival_time }}</p>
        </li>
    @empty
        <li>
            Non ci sono treni in partenza
        </li>
    @endforelse
@endsection
