<?php

use Illuminate\Database\Seeder;

class UsuarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        usuaris::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            usuaris::create([
                'idusuari' => $faker->shuffle(array(1,2,3,4,5,6,7,8,9,10)),
                'nom' => $faker->name,
                'descripcio' => $faker->text($maxNbChars = 200),
                'DataNaixement' => $faker->date,
                'correu_electronic' => $faker->freeEmail,
                'telefon' => $faker->phoneNumber,
                'data_alta' => $faker->date,
                'data_baixa' => $faker->date,
                'rol' => $faker->word,
                'password' => $faker->name,
            ]);
        }
    }
}
