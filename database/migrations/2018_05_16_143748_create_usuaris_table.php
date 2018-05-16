<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuaris', function(Blueprint $table)
		{
			$table->integer('idusuaris')->primary();
			$table->string('nom', 45);
			$table->date('DataNaixement');
			$table->string('correu_electronic', 45);
			$table->string('telefon', 9)->nullable();
			$table->date('data_alta')->nullable();
			$table->date('data_baixa')->nullable();
			$table->string('password');
			$table->string('descripcio', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuaris');
	}

}
