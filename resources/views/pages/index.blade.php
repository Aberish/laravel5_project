@extends('...layouts.master')
@section('content')
<?php
foreach ($pages as $page)
{
    if (($page->parent_id)!=0) { ?>
        <h2>
            <a href="/<?=$pages[$page->id]?>/<?=$page->title?>-<?=$page->id?>">
                <?= $page->title ?>
            </a>
        </h2>
    <?php } else { ?>
        <h2><a href="/<?php echo(strtolower($page->title).'-'.$page->id); ?>"><?= $page->title ?></a></h2>
    <?php } ?>
    <p><?= nl2br($page->content)?></p>
<?php
}?>
<?php echo $pages->render(); ?>
@stop
