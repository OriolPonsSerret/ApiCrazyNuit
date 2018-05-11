<?php

use Illuminate\Database\Seeder;

class ComentarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        comentaris::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
        	comentaris::create([
        		'idcomentaris' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
        		'comtext' => $faker->text($maxNbChars = 150)),
        		'comvaloracio' => $faker->numberBetween($min = 1, $max = 5),
        	]);
        }
    }
}
