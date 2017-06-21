<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAsistenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('asistencia', function(Blueprint $table)
		{
			$table->foreign('reunion_asist', 'asistencia_reunion_asist_fkey')->references('f_reunion')->on('reunion')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('asistente', 'asistencia_asistente_fkey')->references('id')->on('adulto')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('asistencia', function(Blueprint $table)
		{
			$table->dropForeign('asistencia_reunion_asist_fkey');
			$table->dropForeign('asistencia_asistente_fkey');
		});
	}

}
