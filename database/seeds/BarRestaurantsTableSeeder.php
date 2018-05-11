<?php

use Illuminate\Database\Seeder;

class BarRestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        bar_restaurant::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
        	bar_restaurant::create([
        		'idBar-Restaurant' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
        		'Nom' => $faker->sentence($nbWords = 3),
        		'Descripcio' => $faker->text($maxNbChars = 200),
        		'Valoracio' => $faker->shuffle(array(1,2,3,4,5)),
        		'Horari-Obertura' => $faker->time($format = 'H:i:s'),
        		'Horari-Tancament' => $faker->time($format = 'H:i:s'),
        		'TipusGastronomic' => $faker->sentence($nbWords = 3),
        		'Categoria' => $faker->numberBetween($min = 1, $max = 5),
        	]);
        }
    }
}
