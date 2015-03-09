<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->longText('description');
			$table->string('thumbnail');
			$table->timestamp('date_debut');
			$table->timestamp('date_fin')->nullable();
			$table->string('location');
			$table->unsignedInteger('auteur',false);
			$table->timestamps();
		});

		Schema::table('events', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('users')
			      ->onDelete('restrict')
			      ->onUpdate('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
