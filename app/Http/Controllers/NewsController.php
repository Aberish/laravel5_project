<?php namespace Opus15\Http\Controllers;

use Opus15\Http\Requests;
use Opus15\News;
use Illuminate\Support\Str;
use Opus15\Http\Requests\CreateNewsRequest;
use Opus15\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private $new;

    function __construct(News $new)
    {
        $this->new = $new;
    }
	public function index()
	{
        $news = $this->new->paginate(1);
        return view('news.index',compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(News $new, CreateNewsRequest $request )
	{
        $slug = Str::slug($request->get('title'),'-');
        $new->create($request->all());
        return redirect()->route('news.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(News $new)
	{
        return view('news.show', compact('new'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(News $new)
	{
        return view('news.edit', compact('new'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(News $new, UpdateNewsRequest $request)
	{
        $slug = Str::slug($request->get('title'),'-');

        $new->fill([
            'title'        => $request->get('title'),
            'content'      => $request->get('content'),
            'theme'         => $request->get('theme'),
            'slug'         => $slug,
            'updated_at'   => new \DateTime()
        ])->save();

        return redirect()->route('news.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(News $new)
	{
        $new->delete();
        return redirect()->route('news.index');
	}

}
