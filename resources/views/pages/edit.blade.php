@extends('layouts.master')
@section('content')
    <h1>Editer la page : {{$page->title}}</h1>

    {!! Form::model($page, ['route' => ['pages.update', 'slug' => $page->slug], 'method' => 'PUT']) !!}
        @include('pages._form')
    {!! Form::close() !!}
    <p>Dernière mise à jour le : {{$page->updated_at}}</p>

    {!! Form::open(['method' => 'DELETE', 'route' => ['pages.destroy', $page->slug]]) !!}
    <div class="form-group">
        {!! Form::submit('Supprimer la page', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@stop