@extends('...layouts.master')
@section('content')
    <h1>{{$event->title}}</h1>
    <p>
        {!! nl2br($event->description) !!}
        {!! nl2br($event->date_debut) !!}

    </p>
    <p>Dernière mise à jour le : {{$event->updated_at}}</p>
    {!! link_to_route('events.index','Retour') !!}
    {!! link_to_route('events.edit','Editer la page',[$event->slug]) !!}
@stop
