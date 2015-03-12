@extends('layouts.master')
@section('content')
    <h1>Nouvelle event</h1>

    {!! Form::open(['route' => 'events.store']) !!}
        @include('events._form_create')
    {!! Form::close() !!}
@stop