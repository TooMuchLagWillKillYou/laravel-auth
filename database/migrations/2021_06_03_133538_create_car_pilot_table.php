<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarPilotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_pilot', function (Blueprint $table) {
            $table -> id();

            $table -> bigInteger('car_id') -> unsigned() -> index();
            $table -> bigInteger('pilot_id') -> unsigned() -> index();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_pilot');
    }
}
