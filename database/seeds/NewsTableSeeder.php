<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 09/03/2015
 * Time: 19:50
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Opus15\News;

class NewsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('news')->delete();
		News::unguard();
		News::create(array(
			'title' => 'Premiere news',
			'content' => "Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.",
			'theme' => 'Cours',
			'auteur' => DB::table('users')->where('login','admin')->pluck('id'),
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));
		News::create(array(
			'title' => 'Premiere news',
			'content' => "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.",
			'theme' => 'Cours',
			'auteur' => DB::table('users')->where('login','admin')->pluck('id'),
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));
	}

}