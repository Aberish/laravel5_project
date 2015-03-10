<?php namespace Opus15\Http\Controllers;
use Opus15\News;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $news = \DB::table('news')
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get();
        $events = \DB::table('events')
                ->where('date_debut','>', new \DateTime())
                ->orwhere('date_fin','>', new \DateTime())
                ->orderBy('date_debut', 'desc')
                ->take(2)
                ->get();
        $pages = \DB::table('pages')
            ->where('title','=', 'Stage')
            ->orwhere('title','=', 'Contact')
            ->get();
        $instruments = \DB::table('pages')
            ->where('parent_id','=',
                \DB::table('pages')
                    ->where('title', '=', 'Cours')->pluck('id'))
            ->get();
        return view('welcome',['news' => $news, 'events' => $events, 'pages' => $pages, 'instruments' => $instruments  ]);
	}

}
