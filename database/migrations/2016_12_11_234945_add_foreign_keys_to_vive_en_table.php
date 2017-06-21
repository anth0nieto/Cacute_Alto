<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToViveEnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vive_en', function(Blueprint $table)
		{
			$table->foreign('idpersona', 'fk_idpersona')->references('id')->on('persona')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('codigovivienda', 'fk_codigovivienda')->references('codigo')->on('vivienda')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vive_en', function(Blueprint $table)
		{
			$table->dropForeign('fk_idpersona');
			$table->dropForeign('fk_codigovivienda');
		});
	}

}
