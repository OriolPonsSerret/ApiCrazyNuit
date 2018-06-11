<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscoZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disco_zones', function(Blueprint $table)
		{
			$table->integer('iddiscoteca');
			$table->integer('idzones')->index('idzonesdisco_idx');
			$table->primary(['iddiscoteca','idzones']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disco_zones');
	}

}
