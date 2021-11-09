<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++ ) {
            $newHoliday = new Holiday();
            $newHoliday->code = $faker->ean8();
            $newHoliday->country = $faker->country();
            $newHoliday->city = $faker->city();
            $newHoliday->hotel_name = $faker->company();
            $newHoliday->departure_airport = $faker->city();;
            $newHoliday->arrival_airport = $faker->city();
            $newHoliday->departure_date = $faker->dateTimeThisMonth();
            $newHoliday->arrival_date =$faker->dateTimeThisMonth('+21 days');
            $newHoliday->days = $faker->randomDigit();
            $newHoliday->packedge ="Full Board";
            $newHoliday->price = $faker->randomFloat(2, 200, 2000);
            $newHoliday->save();   
        }
        
    }
}
