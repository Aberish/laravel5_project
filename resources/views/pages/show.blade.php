@extends('...layouts.master')
@section('content')

<h2><?php echo $page->title ?></h2>
<br>
<p><?php echo $page->content ?></p>
<a href="/">Retour</a>
@stop

