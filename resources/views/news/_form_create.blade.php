<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title','Titre') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    {!! Form::label('description','Contenu de la page') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('theme') ? 'has-error' : '' }}">
    {!! Form::label('theme','Theme') !!}
    {!! Form::text('theme', null, ['class' => 'form-control']) !!}
    {!! $errors->first('theme', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::submit('Mettre à jour', ['class' => 'btn btn-success']) !!}
</div>
<input class="form-control" placeholder="premiere-news" type="text" value="slug">
<input class="form-control" placeholder="premiere-news" name="slug" type="text" value="slug" id="slug">
<input class="form-control" placeholder="premiere-news" name="slug" type="text" value="premiere-news" id="slug">
'slug', null,