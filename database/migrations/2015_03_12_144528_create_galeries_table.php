<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galeries', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longtext('content');
            $table->integer('parent_id')->nullable();
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
		Schema::table('galeries', function(Blueprint $table)
		{
			//
		});
	}

}
