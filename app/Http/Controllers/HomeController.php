<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Brand;
use App\Pilot;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show($id){

        $car = Car::findOrFail($id);

        return view('pages.show', compact('car'));
    }

    // public function edit($id){

    //     $car = Car::findOrFail($id);
    //     $brands = Brand::all();
    //     $pilots = Pilot::all();

    //     return view('pages.edit', compact('car', 'brands', 'pilots'));
    // }

    // public function update(Request $request, $id){

    //     dd($request -> all(), $id);

    //     // $valid = $request -> validate([

    //     // ]);
    // }
}
