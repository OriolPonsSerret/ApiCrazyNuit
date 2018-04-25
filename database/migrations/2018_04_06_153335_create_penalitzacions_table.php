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
			$table->string('pentipus', 45);
			$table->date('pendata_inici')->nullable();
			$table->date('pendata_final')->nullable();
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
