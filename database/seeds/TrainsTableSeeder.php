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
        $newTrain = new Train();
        //tutte le colonne
        $newTrain->azienda= $faker->company();
        $newTrain->stazione_di_partenza= $faker->city();
        $newTrain->stazione_di_arrivo= $faker->city();
        $newTrain->orario_di_partenza= $faker->time();
        $newTrain->orario_di_arrivo= $faker->time();
        $newTrain->codice_treno= $faker->randomNumber(10, true);
        $newTrain->numero_carrozza= $faker->randomDigitNotNull();

        $newTrain->save();
    }
}
