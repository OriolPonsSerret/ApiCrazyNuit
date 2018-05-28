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
			$table->integer('idbarrestaurant');
			$table->integer('idrutes')->index('idrutesrestaurant_idx');
			$table->primary(['idbarrestaurant','idrutes']);
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
