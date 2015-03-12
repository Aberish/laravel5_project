@extends('...layouts.master')
@section('content')
    <h1>{{$new->title}}</h1>
    <p>
        {!! nl2br($new->content) !!}
    </p>
    <p>Dernière mise à jour le : {{$new->updated_at}}</p>
    {!! link_to_route('news.index','Retour') !!}
    {!! link_to_route('news.edit','Editer la page',[$new->slug]) !!}
@stop
