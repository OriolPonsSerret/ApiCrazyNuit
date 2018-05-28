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
			$table->smallInteger('Valoracio')->nullable();
			$table->dateTime('Horari-Obertura')->nullable();
			$table->dateTime('Horari-Tancament')->nullable();
			$table->string('TipusGastronomic', 45)->nullable();
			$table->integer('Categoria')->nullable();
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
