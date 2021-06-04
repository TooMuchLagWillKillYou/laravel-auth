<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class MyController extends Controller
{
    public function index(){

        $cars = Car::all();

        return view('pages.index', compact('cars'));
    }
}
