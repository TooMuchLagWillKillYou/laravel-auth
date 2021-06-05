<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Brand;
use App\Pilot;

class CarController extends Controller
{
    public function edit($id){

        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $pilots = Pilot::all();

        return view('pages.edit', compact('car', 'brands', 'pilots'));
    }

    public function update(Request $request, $id){

        // dd($request -> all(), $id);

        $valid = $request -> validate([
            'name' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'kW' => 'required|integer|min:100|max:500'
        ]);
        $car = Car::findOrFail($id);
        // dd($valid, $car);
        $car -> update($valid);

        $brand = Brand::findOrFail($request -> brand_id);
        $car -> brand() -> associate($brand);
        $car -> save();

        $car -> pilots() -> sync($request -> pilots_id);

        return redirect() -> route('index');
    }

    public function delete($id){

        $car = Car::findOrFail($id);

        $car -> deleted = true;
        $car -> save();

        return redirect() -> route('index');
    }
}
