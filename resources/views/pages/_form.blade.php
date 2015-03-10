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
    {!! Form::label('content','Contenu de la page') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
    {!! Form::label('parent_id','Catégoriede la page') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
    {!! $errors->first('parent_id', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::submit('Mettre à jour', ['class' => 'btn btn-success']) !!}
</div>