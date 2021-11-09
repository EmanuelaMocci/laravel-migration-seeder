<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newHoliday = new Holiday();
        $newHoliday->code ="mb-100-123";
        $newHoliday->country ="Madagascar";
        $newHoliday->city ="Andilana";
        $newHoliday->hotel_name ="Andilana Beach";
        $newHoliday->departure_airport ="Roma Fiumicino";
        $newHoliday->arrival_airport ="Andilana Airport";
        $newHoliday->departure_date ="2021/02/20";
        $newHoliday->arrival_date ="2021/02/20";
        $newHoliday->days =10;
        $newHoliday->packedge ="Full Board";
        $newHoliday->price =1200;
        $newHoliday->save();
    }
}
