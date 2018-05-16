<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscoRutaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disco_ruta', function(Blueprint $table)
		{
			$table->integer('iddiscoteca');
			$table->integer('idrutes')->index('idrutesdisco_idx');
			$table->primary(['iddiscoteca','idrutes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disco_ruta');
	}

}
