@extends('layouts.master')
@section('content')
    <h1>Nouvelle new</h1>

    {!! Form::open(['route' => 'news.store']) !!}
        @include('news._form_create')
    {!! Form::close() !!}
@stop