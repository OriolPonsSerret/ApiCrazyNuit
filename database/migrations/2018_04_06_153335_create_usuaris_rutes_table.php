<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarisRutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuaris_rutes', function(Blueprint $table)
		{
			$table->integer('idusuaris');
			$table->integer('idrutes')->index('idrutesusuaris_idx');
			$table->primary(['idusuaris','idrutes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuaris_rutes');
	}

}
