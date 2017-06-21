<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCargoCcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargo_cc', function(Blueprint $table)
		{
			$table->string('idadulto', 12)->unique('cargo_cc_idadulto_key');
			$table->string('cargo', 40)->unique('cargo_cc_cargo_key');
			$table->date('f_inic');
			$table->date('f_fin')->nullable();
			$table->primary(['idadulto','cargo'], 'pk_cargo_cc');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargo_cc');
	}

}
