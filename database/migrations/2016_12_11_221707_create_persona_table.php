<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persona', function(Blueprint $table)
		{
			$table->string('id')->primary('pk_persona');
			$table->string('p_nombre', 20);
			$table->string('s_nombre', 20)->nullable();
			$table->string('p_apellido', 20);
			$table->string('s_apellido', 20)->nullable();
			$table->date('f_nac');
			$table->string('pais_nac', 20);
			$table->char('sexo', 1);
			$table->boolean('cond_medica');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('persona');
	}

}
