<?php namespace Opus15\Http\Controllers;


class EventController  extends Controller{
    public function index()
    {
        return view('Events.index');
    }

    public function show()
    {
        return view('Events.show');
    }
} 