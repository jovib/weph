<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phones', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('phone_id');
			$table->string('anie',10);
			$table->string('firstname',30);
			$table->string('lastname',30);
			$table->string('mail',30)->nullable()->default('deconocido');
			$table->string('celular',15)->nullable()->default('deconocido');
			$table->string('cargo',50)->nullable()->default('deconocido');
			$table->string('dep',50)->nullable()->default('deconocido');
			$table->string('note',140)->nullable()->default('sin_DATA');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phones');
	}

}
