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

        dd($request -> all(), $id);

        // $valid = $request -> validate([

        // ]);
    }
}
