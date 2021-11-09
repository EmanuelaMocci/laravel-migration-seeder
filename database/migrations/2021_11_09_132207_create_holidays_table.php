<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique();
            $table->string('country', 50);
            $table->string('city', 30);
            $table->string('hotel_name', 50);
            $table->string('departure_airport', 50);
            $table->string('arrival_airport', 50);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->tinyInteger('days')->unsigned();
            $table->string('packedge', 30);
            $table->smallInteger('price')->unsigned();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
