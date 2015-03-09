<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::table('users')->delete();
		DB::table('users')->insert(array(
			'login' => 'admin',
			'password' => 'admin',
			'type' => 'admin'
		));

		$this->call('NewsTableSeeder');
	}

}

class NewsTableSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		DB::table('news')->delete();
		DB::table('news')->insert(array(
			'title' => 'admin',
			'content' => 'admin',
			'theme' => 'admin',
		));

	}

}
