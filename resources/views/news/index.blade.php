@extends('...layouts.master')

@section('content')

<table id="new-list">
	<tr id="new-list-head">
		<th>Nom de l'evenement</th>
		<th>Date</th>
	</tr>
@foreach($news as $new)
	<tr class="evenement">
	    <td id="new-name">
           {!! link_to_route('news.show', $new->title, [$new->slug]) !!}
	    </td>
        <td id="new-date">
            {{ $new->date_debut }}
        </td>
    </tr>
@endforeach
</table>
<?php echo $news->render(); ?>
@stop
