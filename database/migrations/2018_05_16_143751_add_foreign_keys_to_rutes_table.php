<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rutes', function(Blueprint $table)
		{
			$table->foreign('rutcreador', 'rutcreador')->references('idusuaris')->on('usuaris')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rutes', function(Blueprint $table)
		{
			$table->dropForeign('rutcreador');
		});
	}

}
