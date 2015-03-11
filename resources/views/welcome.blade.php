@extends('layouts.master')
@section('content')
<div class="droite">
    <div class=instruments>
    @foreach ($instruments as  $instrument)
        <button class="ins">{{$instrument->title}}</button>
    @endforeach
        <button class="ins">Guitare</button>
        <button class="ins">Flûte</button>
        <button class="ins">Batterie</button>
        <button class="ins">Saxophone</button>
        <button class="ins">Chant</button>
        <button class="ins">Trompette</button>
    </div>
    <div id=news>
    @foreach ($news as $key => $new)
        <div class=new>
            <h1 class="new_title">News {{$key+1}}</h1>
            <h2>{{$new->title}}</h2>
            <p>{{$new->content}}</p>
        </div>
    @endforeach
    </div>
</div>
<div class="info">
    <div id=events>
    <h1 class="titre">Event-Concert</h1>
    @foreach ($events as $key => $event)
        <div class=new>
            <h2>{{$event->title}}</h2>
            <p>{{$event->description}}</p>
        </div>
    @endforeach
    </div>
    @if ($pages[0]->title == "Stage")
        <div id=stage>
                <h1 class="titre">{{$pages[0]->title}}</h1>
                <p>{{$pages[0]->description}}</p>
        </div>
        <div id=contact>
                <h1 class="titre">{{$pages[1]->title}}</h1>
                <p>{{$pages[1]->description}}</p>
        </div>
    @else
        <div id=stage>
                <h1 class="titre">{{$pages[1]->title}}</h1>
                <p>{{$pages[1]->content}}</p>
        </div>
        <div id=contact>
                <h1 class="titre">{{$pages[0]->title}}</h1>
                <p>{{$pages[0]->content}}</p>
        </div>
    @endif
</div>
@stop