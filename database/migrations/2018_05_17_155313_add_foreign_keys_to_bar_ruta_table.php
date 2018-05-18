<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBarRutaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bar_ruta', function(Blueprint $table)
		{
			$table->foreign('idbar_restaurant', 'idbar_restaurantrutes')->references('idBar-Restaurant')->on('bar_restaurant')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idrutes', 'idrutesrestaurant')->references('idrutes')->on('rutes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bar_ruta', function(Blueprint $table)
		{
			$table->dropForeign('idbar_restaurantrutes');
			$table->dropForeign('idrutesrestaurant');
		});
	}

}
