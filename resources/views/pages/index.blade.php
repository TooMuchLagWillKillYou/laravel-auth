@extends('layouts.app')
@section('content')

    <div class="container">

        <a href="{{ route('car.create') }}">
            <button>Add new</button>
        </a>

        <ul>
            @foreach ($cars as $car)
            <li>
                {{ ucfirst($car -> name) }} - {{ ucfirst($car -> model) }}
            </li>
            <a href="{{ route('car.edit', $car -> id) }}">
                edit
            </a>
            <a href="{{ route('car.destroy', $car -> id) }}">
                delete
            </a>
            <p>{{ $car -> brand -> name }}</p>
            <p>
                @foreach ($car -> pilots as $pilot)
                {{ $pilot -> firstname }} {{ $pilot -> lastname }}, 
                @endforeach
            </p>
            @endforeach
        </ul>
        
    </div>

@endsection