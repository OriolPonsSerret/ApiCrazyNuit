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
			$table->integer('idusuaris', true);
			$table->string('name', 45);
			$table->date('DataNaixement')->nullable();
			$table->string('email', 45);
			$table->string('telefon', 9)->nullable();
			$table->date('dataAlta')->nullable();
			$table->date('dataBaixa')->nullable();
			$table->string('password');
			$table->string('descripcio', 300)->nullable();
			$table->timestamps();
			$table->string('remember_token');
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
