@extends('...layouts.master')
@section('content')

<h2 id="event-title"> <?=$event->title ?></h2>
<p id="event-date"> <?=$event->date_debut ?></p>
<p id="event-content"><?= $event->description ?></p>
<p><a href="{{ URL::to('/evenements') }}">Retour</a></p>

@stop

