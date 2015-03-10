@extends('layouts.master')
@section('content')
    <div class=instruments>
    @foreach ($instruments as  $instrument)
        <p>{{$instrument->title}}</p>
    @endforeach
    </div>
    <div id=news>
    @foreach ($news as $key => $new)
        <div class=new>
            <h1>News {{$key+1}}</h1>
            <h2>{{$new->title}}</h2>
            <p>{{$new->content}}</p>
        </div>
    @endforeach
    </div>
<div class="info">
    <div id=events>
    <h1>Event-Concert</h1>
    @foreach ($events as $key => $event)
        <div class=new>
            <h2>{{$event->title}}</h2>
            <p>{{$event->description}}</p>
        </div>
    @endforeach
    </div>
    @if ($pages[0]->title == "Stage")
        <div id=stage>
                <h2>{{$pages[0]->title}}</h2>
                <p>{{$pages[0]->description}}</p>
        </div>
        <div id=contact>
                <h2>{{$pages[1]->title}}</h2>
                <p>{{$pages[1]->description}}</p>
        </div>
    @else
        <div id=stage>
                <h2>{{$pages[1]->title}}</h2>
                <p>{{$pages[1]->content}}</p>
        </div>
        <div id=contact>
                <h2>{{$pages[0]->title}}</h2>
                <p>{{$pages[0]->content}}</p>
        </div>
    @endif
</div>
@stop