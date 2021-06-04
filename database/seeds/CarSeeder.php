<?php

use Illuminate\Database\Seeder;

use App\Car;
use App\Brand;
use App\Pilot;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class, 10) -> make()
                -> each(function($car){
                $brand = Brand::inRandomOrder() -> first() -> get();
                $car -> brand() -> associate($brand);
                $car -> save();

                // $pilot = Pilot::inRandomOrder() -> limit(3) -> get();
                // $car -> pilots() -> attach($pilot);
                // $car -> save();
        });

    }
}
