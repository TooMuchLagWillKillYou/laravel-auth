@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="d-flex w-100 justify-content-between align-items-center my-5">
            <h2 class="display-4">Cars list</h2>
            <a href="{{ route('car.create') }}" class="btn btn-primary">Add new</a>
        </div>

        <ul class="list-group list-group-flush">
            @foreach ($cars as $car)
                <li class="list-group-item list-group-item-action">

                    <div class="d-flex w-100 justify-content-between">
                        <h4 class="text-primary">{{ ucfirst($car -> name) }} - {{ ucfirst($car -> model) }}</h4>
                        
                        <p>
                            <a href="{{ route('car.edit', $car -> id) }}">
                                edit
                            </a>
                            <a href="{{ route('car.destroy', $car -> id) }}" class="ml-1">
                                delete
                            </a>
                        </p>
                    </div>

                    <p class="lead">{{ ucfirst($car -> brand -> name) }}</p>
                    <p>
                        @foreach ($car -> pilots as $pilot)
                        {{ $pilot -> firstname }} {{ $pilot -> lastname }}, 
                        @endforeach
                    </p>
                    
                </li>
            @endforeach
        </ul>
        
    </div>

@endsection
