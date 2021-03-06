<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPubZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pub_zones', function(Blueprint $table)
		{
			$table->foreign('IdPub', 'idpubzones')->references('idPub')->on('pub')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('IdZones', 'idzonespub')->references('idzones')->on('zones')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pub_zones', function(Blueprint $table)
		{
			$table->dropForeign('idpubzones');
			$table->dropForeign('idzonespub');
		});
	}

}
