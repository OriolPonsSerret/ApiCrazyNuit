<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarisAssolimentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuaris_assoliments', function(Blueprint $table)
		{
			$table->foreign('idassoliments', 'idassolimentsusuaris')->references('idassoliments')->on('assoliments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idusuaris', 'idusuarisassoliments')->references('idusuaris')->on('usuaris')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuaris_assoliments', function(Blueprint $table)
		{
			$table->dropForeign('idassolimentsusuaris');
			$table->dropForeign('idusuarisassoliments');
		});
	}

}
