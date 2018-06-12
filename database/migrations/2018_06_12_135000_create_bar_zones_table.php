<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bar_zones', function(Blueprint $table)
		{
			$table->integer('IdBarRestaurant');
			$table->integer('IdZones')->index('idzonesbar_idx');
			$table->primary(['IdBarRestaurant','IdZones']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bar_zones');
	}

}
