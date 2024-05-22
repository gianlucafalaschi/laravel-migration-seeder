<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        // ciclo for per 10 volte crea  una nuova istanza di treno, la popola e salva
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElements(['FS', 'FCU']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->number_of_wagons = $faker->numberBetween(1, 50);
            $newTrain->in_time = $faker->randomElements(['0', '1']);
            $newTrain->cancelled = $faker->randomElements(['0', '1']);

        }
    }
}
