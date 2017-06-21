<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConstanciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('constancias', function(Blueprint $table)
		{
			$table->date('f_const');
			$table->string('solicitante', 14);
			$table->string('tipo', 40);
			$table->primary(['f_const','solicitante'], 'pk_constancias');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('constancias');
	}

}
