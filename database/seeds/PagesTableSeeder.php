<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 09/03/2015
 * Time: 19:50
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Opus15\Page;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		$titre = "Titre de la page ";
		$cours = ['Piano','Guitare','Violon'];

		DB::table('pages')->delete();
		Page::unguard();
		Page::create(array(
			'title' => $titre . "1",
			'slug' => Str::slug($titre ."1",'-'),
			'content' => "Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?",
			'parent_id' => null,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));
		Page::create( [
			'title' => $titre . "2",
			'slug' => Str::slug($titre ."2",'-'),
			'content' => "My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?",
			'parent_id' => DB::table('pages')->where('title','Titre de la page 1')->pluck('id'),
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		] );
		Page::create( [
			'title' => 'Cours',
			'slug' => Str::slug('Cours','-'),
			'content' => "Voici la page concernant les cours",
			'parent_id' => null,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		] );

		foreach($cours as $instrument) {
			Page::create( [
				'title' => $instrument,
				'slug' => Str::slug($instrument,'-'),
				'content' => "Voici la page concernant le cours : " . $instrument,
				'parent_id' => DB::table('pages')->where('title','Cours')->pluck('id'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			] );
		}

        Page::create(array(
            'title' => 'Contact',
            'slug' => Str::slug('Contact','-'),
            'content' => "Adresse : 58 rue des Bergers 75015 Paris
                        Numéro : 01.48.57.18.99",
            'parent_id' => null,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ));
        Page::create(array(
            'title' => 'Stage',
            'slug' => Str::slug('Stage','-'),
            'content' => "blablablaTablablablablalblalblalbllalblalblMaisOuiC'estClairblablalblalblallblalblalblalblalblallblalblalb",
            'parent_id' => null,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ));
	}
}