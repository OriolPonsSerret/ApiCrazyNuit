<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        zones::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
        	zones::create([
        		'idzones' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
        		'zonpoblacio' => $faker->city,
        		'zoncodi_postal' => $faker->randomNumber($nbDigits = 5),
        		'zonpais' => $faker->country,
        	]);
        }
    }
}
