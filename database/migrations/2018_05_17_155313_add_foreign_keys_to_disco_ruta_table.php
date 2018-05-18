<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiscoRutaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disco_ruta', function(Blueprint $table)
		{
			$table->foreign('iddiscoteca', 'iddiscorutes')->references('idDiscoteca')->on('discoteca')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idrutes', 'idrutesdisco')->references('idrutes')->on('rutes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disco_ruta', function(Blueprint $table)
		{
			$table->dropForeign('iddiscorutes');
			$table->dropForeign('idrutesdisco');
		});
	}

}
