<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViviendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vivienda', function(Blueprint $table)
		{
			$table->smallInteger('codigo')->primary('pk_vivienda');
			$table->string('direccion', 60)->unique('vivienda_direccion_key');
			$table->boolean('propia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vivienda');
	}

}
