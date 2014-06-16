<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('details', function(Blueprint $table)
		{
			$table->increments('id');

      $table->integer('feature_id')->unsigned();
      $table->string('title');
      $table->text('body')->default("");
      $table->boolean('signoff')->default(0);
      $table->string('signoff_text')->default("");
      $table->boolean('client_visible')->default(0);
      $table->boolean('attachments_button')->default(0);

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
		Schema::drop('details');
	}

}
