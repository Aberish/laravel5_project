@extends('layouts.master')
@section('content')
    <h1>Editer l'new : {{$new->title}}</h1>

    {!! Form::model($new, ['route' => ['news.update', 'slug' => $new->slug], 'method' => 'PUT']) !!}
        @include('news._form_edit')
    {!! Form::close() !!}
    <p>Dernière mise à jour le : {{$new->updated_at}}</p>

    {!! Form::open(['method' => 'DELETE', 'route' => ['news.destroy', $new->slug]]) !!}
    <div class="form-group">
        {!! Form::submit('Supprimer la page', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@stop