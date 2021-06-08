@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('car.store') }}" method="post">
            @csrf
            @method('POST')
    
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
    
            <div class="form-group">
                <label for="model">Model</label>
                <input class="form-control" type="text" name="model" id="model" required>
            </div>
    
            <div class="form-group">
                <label for="kW">kW</label>
                <input class="form-control" type="text" name="kW" id="kW" required>
            </div>
    
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select class="form-control" name="brand_id" id="brand_id" required>

                    @foreach ($brands as $brand)
                        <option value="{{ $brand -> id }}">
                            {{ ucfirst($brand -> name) }}
                        </option>
                    @endforeach

                </select>
            </div>
    
            <div class="form-group">
                <label for="pilots_id[]">Pilots</label>
                <select class="form-control" name="pilots_id[]" id="pilots_id[]" required multiple>

                    @foreach ($pilots as $pilot)
                        <option value="{{ $pilot -> id }}">
                            {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                        </option>
                    @endforeach

                </select>
            </div>
    
            <button type="submit" class="btn btn-primary mt-4">Submit</button> 
        </form>
    </div>
@endsection

