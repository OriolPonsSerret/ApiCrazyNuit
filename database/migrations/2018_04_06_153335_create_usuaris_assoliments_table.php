<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarisAssolimentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuaris_assoliments', function(Blueprint $table)
		{
			$table->integer('idusuaris');
			$table->integer('idassoliments')->index('idassolimentsusuaris_idx');
			$table->primary(['idusuaris','idassoliments']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuaris_assoliments');
	}

}
