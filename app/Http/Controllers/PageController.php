<?php namespace Opus15\Http\Controllers;

use Illuminate\Support\Str;
use Opus15\Http\Requests\CreatePageRequest;
use Opus15\Http\Requests\UpdatePageRequest;
use Opus15\Page;

class PageController extends Controller {

	/**
	 * @var Page
	 */
	private $page;

	/**
	 * @param Page $page
	 */
	function __construct(Page $page)
	{
		$this->page = $page;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pages = $this->page->get();
		return view('pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Page $page, CreatePageRequest $request)
	{
		$slug = Str::slug($request->get('title'),'-');
		$page->create($request->all());

		return redirect()->route('pages.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show(Page $page)
	{
		return view('pages.show', compact('page'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Page  $page
	 * @return Response
	 */
	public function edit(Page $page)
	{
		return view('pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Page $page, UpdatePageRequest $request)
	{
		$slug = Str::slug($request->get('title'),'-');

		$page->fill([
			'title'         => $request->get('title'),
			'content'       => $request->get('content'),
			'parent_id'     => $request->get('parent_id'),
			'slug'          => $slug,
			'updated_at'    => new \DateTime()
		])->save();

		return redirect()->route('pages.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Page $page)
	{
		$page->delete();
		return redirect()->route('pages.index');
	}

}
