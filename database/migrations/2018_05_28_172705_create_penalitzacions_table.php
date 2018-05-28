<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenalitzacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penalitzacions', function(Blueprint $table)
		{
			$table->boolean('penid')->primary();
			$table->string('pentipus', 45);
			$table->date('pendatainici')->nullable();
			$table->date('pendatafinal')->nullable();
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
		Schema::drop('penalitzacions');
	}

}
