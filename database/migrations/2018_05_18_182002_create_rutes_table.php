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
			$table->integer('rutmida');
			$table->string('rutlocals', 500)->nullable();
			$table->date('rutdata')->nullable();
			$table->smallInteger('rutvaloracio')->nullable();
			$table->string('rutnom', 100);
			$table->integer('rutcreador')->nullable();
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