<?php

use Illuminate\Database\Seeder;

class RutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        rutes::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
        	rutes::create([
        		'idrutes' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
        		'rutnom' => $faker->sentence($nbWords = 3),
        		'rutcreador' => $faker->name,
        		'rutmida' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
        		'rutlocals' => $faker->sentences($nb = 3, $asText = false),
        		'rutdescripcio' => $faker->text($maxNbChars = 200),
        		'rutdata' => $faker->date,
        		'rutvaloracio' => $faker->numberBetween($min = 1, $max = 5),
        	]);
        }
    }
}
