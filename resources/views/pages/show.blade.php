@extends('layouts.master')
@section('content')
    <h1>{{$page->title}}</h1>
    <p>
        {!! nl2br($page->content) !!}
    </p>
    <p>Dernière mise à jour le : {{$page->updated_at}}</p>
    {!! link_to_route('pages.index','Retour') !!}
    {!! link_to_route('pages.edit','Editer la page',[$page->slug]) !!}
@stop

