@extends('layouts.app')
@section('content')

    <div class="container">

        <form action="{{ route('car.update', $car -> id) }}" method="POST">    
            @csrf
            @method('POST')
    
            <div class="input-form">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $car -> name }}" required>
            </div>
    
            <div class="input-form">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" value="{{ $car -> model }}" required>
            </div>
    
            <div class="input-form">
                <label for="kW">kW</label>
                <input type="text" name="kW" id="kW" value="{{ $car -> kW }}" required>
            </div>
    
            <div class="input-form">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id" required>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand -> id }}" 
    
                        @if ($car -> brand -> id == $brand -> id)
                            selected
                        @endif
    
                        >{{ $brand -> name }}
                        </option>
                    @endforeach
                </select>
            </div>
    
            <div class="input-form">
                <label for="pilots_id[]">Pilots</label>
                <select name="pilots_id[]" id="pilots_id[]" required multiple>
                    @foreach ($pilots as $pilot)
                        <option value="{{ $pilot -> id }}"
        
                            @foreach ($car -> pilots as $carPilot)
                                @if ($carPilot -> id == $pilot -> id)
                                    selected
                                @endif
                            @endforeach
                            
                        >{{$pilot -> firstname}} {{ $pilot -> lastname }}
                        </option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit">Submit</button> 
        </form>
        
    </div>

@endsection