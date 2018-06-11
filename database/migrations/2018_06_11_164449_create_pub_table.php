<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pub', function(Blueprint $table)
		{
			$table->integer('idPub', true);
			$table->string('Nom', 45);
			$table->string('Descripcio', 200);
			$table->smallInteger('Valoracio')->default(0);
			$table->string('HorariObertura', 10)->nullable();
			$table->string('HorariTancament', 10)->nullable();
			$table->string('TipusGastronomic', 45)->default('Alt');
			$table->integer('Categoria')->default(0);
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
		Schema::drop('pub');
	}

}
