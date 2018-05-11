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
			$table->string('descripcio', 300)->nullable();
			$table->date('DataNaixement');
			$table->string('correu_electronic', 50);
			$table->string('telefon', 9)->nullable();
			$table->date('data_alta')->nullable();
			$table->date('data_baixa')->nullable();
			$table->string('rol', 10)->nullable();
			$table->string('password');
			$table->string('api_token', 60)->nullable()->unique();
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
