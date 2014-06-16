<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimates', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('feature_id')->unsigned();
      $table->string('description');
      $table->string('notes');
      $table->integer('value')->unsigned()->default(0);
      $table->string('unit')->default("h");
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
		Schema::drop('estimates');
	}

}
