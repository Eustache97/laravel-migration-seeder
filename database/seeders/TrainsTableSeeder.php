<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->price = $faker->randomFloat(2, 5, 250);
            $train->company = $faker->randomElement(['TrenItalia', 'Italo']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeInInterval($train->departure_time, "+20 hour");
            $train->train_code = $faker->bothify('####');
            $train->wagon_number = $faker->randomDigitNotNull(0);
            $train->in_time = $faker->numberBetween(0, 1);
            $train->canceled = $faker->numberBetween(0, 1);

            $train->save();
        }
    }
}
