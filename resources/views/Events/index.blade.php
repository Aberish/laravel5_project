@extends('...layouts.master')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<table id="event-list">
	<tr id="event-list-head">
		<th>Nom de l'evenement</th>
		<th>Date</th>
	</tr>
<?php foreach($events as $event) : ?>
	<tr class="evenement">
	    <td id="event-name">
	        <a href="{{ URL::to('/evenements') }}/<?= $event->id?>-<?= $event->title?>">
	            <?=$event->title?>
	        </a>
	    </td>
        <td id="event-date">
            <?= $event->date_debut?>
        </td>
    </tr>
<?php endforeach; ?>
</table>
@stop
