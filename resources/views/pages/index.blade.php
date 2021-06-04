@extends('layouts.app')
@section('content')
    
    <ul>
        @foreach ($cars as $car)
            <li>
                {{ ucfirst($car -> name) }} - {{ ucfirst($car -> model) }}
            </li>
            <a href="{{ route('car.edit', $car -> id) }}">
                edit
            </a>
            <p>{{ $car -> brand -> name }}</p>
            <p>
                @foreach ($car -> pilots as $pilot)
                    {{ $pilot -> firstname }} {{ $pilot -> lastname }}, 
                @endforeach
            </p>
        @endforeach
    </ul>


@endsection