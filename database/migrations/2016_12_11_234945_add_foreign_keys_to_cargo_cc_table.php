<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCargoCcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cargo_cc', function(Blueprint $table)
		{
			$table->foreign('idadulto', 'fk_idadulto')->references('id')->on('adulto')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cargo_cc', function(Blueprint $table)
		{
			$table->dropForeign('fk_idadulto');
		});
	}

}
