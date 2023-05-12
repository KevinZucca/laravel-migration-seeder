<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for ($i = 0; $i < 10; $i++) {
            $trains = new Train();

            $trains->agency = $faker->lastName();
            $trains->start_station = $faker->city();
            $trains->arrival_station = $faker->city();
            $trains->start_time = $faker->dateTimeBetween('-0 week', '+1 day');
            $trains->arrival_time = $faker->dateTimeBetween('-0 day', '+1 day');
            $trains->train_code = $faker->randomNumber(6, true);
            $trains->carriages_number = $faker->randomNumber(2, true);
            $trains->is_in_time = $faker->boolean();
            $trains->is_canceled = $faker->boolean();

            $trains->save();
        }
    }
}
