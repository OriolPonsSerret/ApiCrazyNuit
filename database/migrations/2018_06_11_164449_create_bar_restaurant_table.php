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
			$table->float('Valoracio', 10, 0)->default(0);
			$table->string('HorariObertura', 10)->nullable();
			$table->string('HorariTancament', 10)->nullable();
			$table->string('TipusGastronomic', 45)->default('Alt');
			$table->integer('Categoria')->default(1);
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
