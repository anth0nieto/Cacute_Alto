<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productor', function(Blueprint $table)
		{
			$table->string('id')->primary('pk_productor');
			$table->string('p_nombre', 20);
			$table->string('s_nombre', 20)->nullable();
			$table->string('p_apellido', 20);
			$table->string('s_apellido', 20)->nullable();
			$table->date('f_nac');
			$table->string('pais_nac', 20);
			$table->char('sexo', 1);
			$table->boolean('cond_medica');
			$table->string('telefono', 12)->nullable();
			$table->string('ocupacion', 40)->nullable();
			$table->boolean('alfabetizado');
			$table->string('codigo')->unique('productor_codigo_key');
			$table->decimal('hectareas', 10, 0);
			$table->string('tenencia', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productor');
	}

}
