<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPubRutaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pub_ruta', function(Blueprint $table)
		{
			$table->foreign('idpub', 'idpubruta')->references('idPub')->on('pub')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idrutes', 'idrutapub')->references('idrutes')->on('rutes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pub_ruta', function(Blueprint $table)
		{
			$table->dropForeign('idpubruta');
			$table->dropForeign('idrutapub');
		});
	}

}
