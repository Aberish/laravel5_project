<?php namespace Opus15\Http\Controllers;

use Illuminate\Support\Str;
use Opus15\Http\Requests;
use Opus15\Http\Requests\CreateEventRequest;
use Opus15\Http\Requests\UpdateEventRequest;
use Opus15\Event;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private $event;

    function __construct(Event $event)
    {
        $this->event = $event;
    }

        public function index()
	{
        $events = $this->event->paginate(1);
        return view('events.index', compact('events'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('events.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Event $event, CreateEventRequest $request)
	{
        $slug = Str::slug($request->get('title'),'-');
        $event->create($request->all());

        return redirect()->route('events.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Event $event)
	{
        return view('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Event $event)
	{
        return view('events.edit', compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Event $event, UpdateEventRequest $request)
	{
        $slug = Str::slug($request->get('title'),'-');

        $event->fill([
            'title'        => $request->get('title'),
            'content'      => $request->get('description'),
            'date_debut'   => $request->get('date_debut'),
            'date_fin'     => $request->get('date_fin'),
            'slug'         => $slug,
            'updated_at'   => new \DateTime()
        ])->save();

        return redirect()->route('events.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Event $event)
	{
        $event->delete();
        return redirect()->route('events.index');
	}

}
