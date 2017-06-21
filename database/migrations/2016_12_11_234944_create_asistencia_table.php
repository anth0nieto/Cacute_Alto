<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsistenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asistencia', function(Blueprint $table)
		{
			$table->date('reunion_asist');
			$table->string('asistente', 14);
			$table->primary(['reunion_asist','asistente'], 'asistencia_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asistencia');
	}

}
