@extends('layouts.master')
@section('content')
    <h1>Editer la page : {{$event->title}}</h1>

    {!! Form::model($event, ['route' => ['events.update', 'slug' => $event->slug], 'method' => 'PUT']) !!}
        @include('events._form')
    {!! Form::close() !!}
    <p>Dernière mise à jour le : {{$event->updated_at}}</p>

    {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->slug]]) !!}
    <div class="form-group">
        {!! Form::submit('Supprimer la page', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@stop