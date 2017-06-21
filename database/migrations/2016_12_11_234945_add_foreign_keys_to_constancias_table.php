<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConstanciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('constancias', function(Blueprint $table)
		{
			$table->foreign('solicitante', 'fk_sol')->references('id')->on('adulto')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('constancias', function(Blueprint $table)
		{
			$table->dropForeign('fk_sol');
		});
	}

}
