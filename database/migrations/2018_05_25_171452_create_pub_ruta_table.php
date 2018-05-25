<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePubRutaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pub_ruta', function(Blueprint $table)
		{
			$table->integer('idpub');
			$table->integer('idrutes')->index('idrutapub_idx');
			$table->primary(['idpub','idrutes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pub_ruta');
	}

}
