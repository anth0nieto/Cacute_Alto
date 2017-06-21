<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuota', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('f_cuota');
			$table->string('n_finca', 20);
			$table->decimal('monto', 10, 0);
			$table->string('ci_tesorero');
			$table->string('nombre_tesorero',20);
			$table->string('ci_contribuyente');
			$table->string('nombre_contribuyente',20);
			$table->string('mes_cancelado',20);
			$table->unique(['f_cuota','n_finca','mes_cancelado']);			

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cuota');
	}

}
