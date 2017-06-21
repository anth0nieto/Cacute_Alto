<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMenorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('menor', function(Blueprint $table)
		{
			$table->foreign('repmenor', 'fk_rep')->references('id')->on('adulto')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('menor', function(Blueprint $table)
		{
			$table->dropForeign('fk_rep');
		});
	}

}
