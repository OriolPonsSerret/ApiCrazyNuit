<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePubZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pub_zones', function(Blueprint $table)
		{
			$table->integer('IdPub');
			$table->integer('IdZones')->index('Idzones_idx');
			$table->primary(['IdPub','IdZones']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pub_zones');
	}

}
