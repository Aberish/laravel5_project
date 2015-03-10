<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 09/03/2015
 * Time: 19:50
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Opus15\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		User::unguard();
		User::create([
			'login' => 'admin',
			'password' => 'admin',
			'type' => 'admin',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
		User::create([
			'login' => 'stage',
			'password' => 'stage2014',
			'type' => 'stage',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
		User::create([
			'login' => 'superadmin',
			'password' => 'opus15superadmin',
			'type' => 'admin',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
		User::create([
			'login' => 'freakazoid',
			'password' => 'supermytho',
			'type' => 'user',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
	}
}