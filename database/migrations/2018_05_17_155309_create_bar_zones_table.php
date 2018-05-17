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
			$table->integer('IdBar_Restaurant');
			$table->integer('IdZones')->index('idzonesbar_idx');
			$table->primary(['IdBar_Restaurant','IdZones']);
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
