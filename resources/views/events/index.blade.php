@extends('...layouts.master')

@section('content')

<table id="event-list">
	<tr id="event-list-head">
		<th>Nom de l'evenement</th>
		<th>Date</th>
	</tr>
@foreach($events as $event)
	<tr class="evenement">
	    <td id="event-name">
           {!! link_to_route('events.show', $event->title, [$event->slug]) !!}
	    </td>
        <td id="event-date">
            {{ $event->date_debut}}
        </td>
    </tr>
@endforeach
</table>
<?php echo $events->render(); ?>
@stop
