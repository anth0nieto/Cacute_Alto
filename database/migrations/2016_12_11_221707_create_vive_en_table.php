<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViveEnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vive_en', function(Blueprint $table)
		{
			$table->string('idpersona', 12)->unique('vive_en_idpersona_key');
			$table->smallInteger('codigovivienda');
			$table->primary(['idpersona','codigovivienda'], 'pk_vive');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vive_en');
	}

}
