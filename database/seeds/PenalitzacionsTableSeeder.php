<?php

use Illuminate\Database\Seeder;

class PenalitzacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
        penalitzacions::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
        	penalitzacions::create([
        		'pentipus' => $faker->randomElement($array = array('exclusio','baneig')),
        		'pendata_inici' => $faker->date,
        		'pendata_final' => $faker->date,
        	]);
        }
    }
}
