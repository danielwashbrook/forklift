<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('features', function(Blueprint $table)
		{
			$table->increments('id');

      $table->integer('parent_id')->unsigned();
      $table->integer('project_id')->unsigned();

      $table->string('title');
      $table->string('working_number');
      $table->boolean('exportable')->default(0);
      $table->boolean('visible')->default(0);
      $table->string('status');

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
		Schema::drop('features');
	}

}
