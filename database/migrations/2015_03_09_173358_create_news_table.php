<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('auteur',false);
			$table->string('title');
			$table->longtext('content');
			$table->string('theme');
			$table->timestamps();
		});

		Schema::table('news', function(Blueprint $table) {
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
		Schema::drop('news');
	}

}
