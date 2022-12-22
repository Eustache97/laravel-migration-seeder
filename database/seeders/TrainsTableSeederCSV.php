<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeederCSV extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainsData = Helpers::getCsvData(__DIR__ . '/trains.csv');
        foreach ($trainsData as $key => $train) {
            if ($key !== 0) {
                $newTrain = new Train();
                $newTrain->company = $train[0];
                $newTrain->departure_station = $train[1];
                $newTrain->arrival_station = $train[2];
                $newTrain->departure_time = $train[3];
                $newTrain->arrival_time = $train[4];
                $newTrain->train_code = $train[5];
                $newTrain->wagon_number = $train[6];
                $newTrain->in_time = $train[7];
                $newTrain->canceled = $train[8];
                $newTrain->save();
            }
        }
    }
}
