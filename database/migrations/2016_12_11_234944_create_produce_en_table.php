<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduceEnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produce_en', function(Blueprint $table)
		{
			$table->string('codigoprod', 5)->unique('produce_en_codigoprod_key');
			$table->string('nombrefinca', 20);
			$table->primary(['codigoprod','nombrefinca'], 'pk_prod_en');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produce_en');
	}

}
