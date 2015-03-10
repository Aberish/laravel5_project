<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 10/03/2015
 * Time: 13:43
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Opus15\Event;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('events')->delete();
		Event::unguard();
		Event::create(array(
			'title' => 'Premiere news',
			'description' => "Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.",
			'auteur' => DB::table('users')->where('login','admin')->pluck('id'),
			'date_debut' => new DateTime(),
			'date_fin' => new DateTime(),
			'location' => 'Ton cul',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));
		Event::create(array(
			'title' => 'Seconde news',
			'description' => "Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year. And the good thing about dogs... is they got different dogs for different people. Like pit bulls. The dog of dogs. Pit bull can be the right man's best friend... or the wrong man's worst enemy. You going to give me a dog for a pet, give me a pit bull. Give me... Raoul. Right, Omar? Give me Raoul.",
			'auteur' => DB::table('users')->where('login','admin')->pluck('id'),
			'date_debut' => new DateTime(),
			'date_fin' => new DateTime(),
			'location' => 'Mon cul',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));
	}
}