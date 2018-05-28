<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarRestaurantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bar_restaurant', function(Blueprint $table)
		{
			$table->integer('idBarRestaurant', true);
			$table->string('Nom', 45);
			$table->string('Descripcio', 200);
<<<<<<< HEAD:database/migrations/2018_05_25_171452_create_bar_restaurant_table.php
			$table->float('Valoracio', 10, 0)->default(0);
			$table->dateTime('HorariObertura')->nullable();
			$table->dateTime('HorariTancament')->nullable();
			$table->string('TipusGastronomic', 45)->default('Alt');
			$table->integer('Categoria')->default(1);
=======
			$table->smallInteger('Valoracio')->nullable();
			$table->dateTime('Horari-Obertura')->nullable();
			$table->dateTime('Horari-Tancament')->nullable();
			$table->string('TipusGastronomic', 45)->nullable();
			$table->integer('Categoria')->nullable();
>>>>>>> fca4bc1cc8167c71a020c6d1b515764153f8632e:database/migrations/2018_05_18_182002_create_bar_restaurant_table.php
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bar_restaurant');
	}

}
