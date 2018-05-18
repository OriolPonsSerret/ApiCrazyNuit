<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarRutaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bar_ruta', function(Blueprint $table)
		{
			$table->integer('idbar_restaurant');
			$table->integer('idrutes')->index('idrutesrestaurant_idx');
			$table->primary(['idbar_restaurant','idrutes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bar_ruta');
	}

}
