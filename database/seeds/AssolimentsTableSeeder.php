<?php

use Illuminate\Database\Seeder;

class AssolimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        assoliments::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
        	assoliments::create([
        		'idassoliments' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
        		'assonom' => $faker->sentence($nbWords = 2),
        		'assodescripcio' => $faker->text($maxNbChars = 150),
        		'assoimatge' => $faker->imageUrl($width = 150, $height = 150),
        	]);
        }
    }
}
