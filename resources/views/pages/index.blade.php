@extends('layouts.master')
@section('content')
    <h1>Liste des page</h1>
    @foreach($pages as $page)
        <h2>{!! link_to_route('pages.show', $page->title, [$page->slug]) !!}</h2>
        {!! link_to_route('pages.edit','Editer la page',['slug' => $page->slug]) !!}
        <p>{{ $page->content }}</p>
    @endforeach
    {!! link_to_route('pages.create','Ajouter une page') !!}
@stop
