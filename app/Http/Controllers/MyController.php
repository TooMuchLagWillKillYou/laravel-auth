<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class MyController extends Controller
{
    public function index(){

        // $cars = Car::all();
        $cars = Car::where('deleted', false) -> get();

        return view('pages.index', compact('cars'));
    }
}
