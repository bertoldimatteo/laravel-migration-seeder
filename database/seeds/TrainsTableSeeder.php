<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){
            $newTrain = new Train();
            //tutte le colonne
            $newTrain->azienda= $faker->company();
            $newTrain->stazione_di_partenza= $faker->city();
            $newTrain->stazione_di_arrivo= $faker->city();
            $newTrain->orario_di_partenza= $faker->dateTimeBetween('2022-07-11 00:01:10','2022-07-13 23:59:10');
            $newTrain->orario_di_arrivo= $faker->dateTimeBetween('2022-07-11 00:01:10','2022-07-13 23:59:10');
            $newTrain->codice_treno= $faker->randomNumber(5, 20);
            $newTrain->numero_carrozza= $faker->randomDigitNotNull();
            $newTrain->save();
        }
    }
}
