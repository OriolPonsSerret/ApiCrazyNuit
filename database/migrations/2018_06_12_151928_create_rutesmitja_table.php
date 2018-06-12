<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRutesmitjaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rutesmitja', function(Blueprint $table)
		{
			$table->integer('idrutesm', true);
			$table->string('rutpub', 500)->nullable();
			$table->string('rutpub2', 500)->nullable();
			$table->string('rutdisco', 500)->nullable();
			$table->string('rutdisco2', 500)->nullable();
			$table->string('rutbar', 500)->nullable();
			$table->string('rutbar2', 500)->nullable();
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
		Schema::drop('rutesmitja');
	}

}
