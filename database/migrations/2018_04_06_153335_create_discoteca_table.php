<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscotecaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discoteca', function(Blueprint $table)
		{
			$table->integer('idDiscoteca')->primary();
			$table->string('Nom', 45);
			$table->string('Descripcio', 200);
			$table->smallInteger('Valoracio')->nullable();
			$table->dateTime('Horari-Obertura')->nullable();
			$table->dateTime('Horari-Tancament')->nullable();
			$table->string('TipusGastronomic', 45)->nullable();
			$table->integer('Categoria')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discoteca');
	}

}
