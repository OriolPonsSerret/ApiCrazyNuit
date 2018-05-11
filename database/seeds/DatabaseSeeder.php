<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarisTableSeeder::class);
        $this->call(ZonesTableSeeder::class);
        $this->call(PubsTableSeeder::class);
        $this->call(RutesTableSeeder::class);
        $this->call(PenalitazcionsTableSeeder::class);
        $this->call(DiscotequesTableSeeder::class);
        $this->call(ComentarisTableSeeder::class);
        $this->call(AssolimentsTableSeeder::class);
        $this->call(BarRestaurantsTableSeeder::class);
    }
}
