<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssolimentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assoliments', function(Blueprint $table)
		{
			$table->integer('idassoliments', true);
			$table->string('assonom', 45);
			$table->string('assodescripcio', 200);
			$table->string('assoimatge', 45)->nullable();
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
		Schema::drop('assoliments');
	}

}
