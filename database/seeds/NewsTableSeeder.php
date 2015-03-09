<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 09/03/2015
 * Time: 19:50
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NewsTableSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		DB::table('news')->insert(array(
			'title' => 'admin',
			'content' => 'admin',
			'theme' => 'admin',
		));

	}

}