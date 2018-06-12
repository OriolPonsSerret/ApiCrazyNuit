<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRutesllarguesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rutesllargues', function(Blueprint $table)
		{
			$table->integer('idrutesl', true);
			$table->string('rutpub', 50)->nullable();
			$table->string('rutbar', 50)->nullable();
			$table->string('rutdisco', 50)->nullable();
			$table->string('rutpub2', 50)->nullable();
			$table->string('rutbar2', 50)->nullable();
			$table->string('rutdisco2', 50)->nullable();
			$table->string('rutpub3', 50)->nullable();
			$table->string('rutbar3', 50)->nullable();
			$table->string('rutdisco3', 50)->nullable();
			$table->date('rutdata')->nullable();
			$table->smallInteger('rutvaloracio')->nullable();
			$table->string('rutnom', 100);
			$table->string('rutcreador', 50);
			$table->string('rutdescripcio', 500)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rutesllargues');
	}

}
