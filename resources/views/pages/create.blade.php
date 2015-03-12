@extends('layouts.master')
@section('content')
    <h1>Nouvelle page</h1>

    {!! Form::open(['route' => 'pages.store']) !!}
        @include('pages._form_create')
    {!! Form::close() !!}
@stop