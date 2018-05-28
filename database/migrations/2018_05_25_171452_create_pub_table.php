<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePubTable extends Migration {

	/**bars
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
			$table->smallInteger('Valoracio')->nullable();
			$table->dateTime('HorariObertura')->nullable();
			$table->dateTime('HorariTancament')->nullable();
			$table->string('TipusGastronomic', 45)->nullable();
			$table->integer('Categoria')->nullable();
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
