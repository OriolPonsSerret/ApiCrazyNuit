<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarisRutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuaris_rutes', function(Blueprint $table)
		{
			$table->foreign('idrutes', 'idrutesusuaris')->references('idrutes')->on('rutes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idusuaris', 'idusuarisrutes')->references('idusuaris')->on('usuaris')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuaris_rutes', function(Blueprint $table)
		{
			$table->dropForeign('idrutesusuaris');
			$table->dropForeign('idusuarisrutes');
		});
	}

}
