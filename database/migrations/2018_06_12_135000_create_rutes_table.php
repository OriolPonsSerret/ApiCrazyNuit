<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rutes', function(Blueprint $table)
		{
			$table->integer('idrutes', true);
			$table->integer('rutmida')->default(0);
			$table->string('rutpubs', 500)->nullable();
			$table->string('rutbars', 500)->nullable();
			$table->string('rutdiscos', 500)->nullable();
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
		Schema::drop('rutes');
	}

}
