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
			$table->integer('idDiscoteca', true);
			$table->string('Nom', 45);
			$table->string('Descripcio', 200);
			$table->smallInteger('Valoracio')->default(0);
			$table->string('HorariObertura', 10)->nullable();
			$table->string('HorariTancament', 10)->nullable();
			$table->string('TipusGastronomic', 45)->default('Alt');
			$table->integer('Categoria')->default(0);
			$table->string('PreuEntrada', 45)->default('0.0');
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
		Schema::drop('discoteca');
	}

}
