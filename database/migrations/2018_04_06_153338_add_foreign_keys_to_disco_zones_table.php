<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiscoZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disco_zones', function(Blueprint $table)
		{
			$table->foreign('iddiscoteca', 'iddiscotecazones')->references('idDiscoteca')->on('discoteca')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idzones', 'idzonesdisco')->references('idzones')->on('zones')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disco_zones', function(Blueprint $table)
		{
			$table->dropForeign('iddiscotecazones');
			$table->dropForeign('idzonesdisco');
		});
	}

}
