<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduceEnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produce_en', function(Blueprint $table)
		{
			$table->foreign('codigoprod', 'fk_codigoprod')->references('codigo')->on('productor')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('nombrefinca', 'fk_nombrefinca')->references('nombre')->on('finca')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produce_en', function(Blueprint $table)
		{
			$table->dropForeign('fk_codigoprod');
			$table->dropForeign('fk_nombrefinca');
		});
	}

}
