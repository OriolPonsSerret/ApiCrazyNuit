<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBarZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bar_zones', function(Blueprint $table)
		{
			$table->foreign('IdBarRestaurant', 'idbarzones')->references('idBarRestaurant')->on('bar_restaurant')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('IdZones', 'idzonesbar')->references('idzones')->on('zones')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bar_zones', function(Blueprint $table)
		{
			$table->dropForeign('idbarzones');
			$table->dropForeign('idzonesbar');
		});
	}

}
