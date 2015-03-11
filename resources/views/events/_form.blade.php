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
<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    {!! Form::label('description','Contenu de la page') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('date_debut') ? 'has-error' : '' }}">
    {!! Form::label('date_debut','Date debut') !!}
    {!! Form::input('date', 'date_debut', null, ['class' => 'form-control']) !!}
    {!! $errors->first('date_debut', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin') ? 'has-error' : '' }}">
    {!! Form::label('date_fin','Date fin') !!}
    {!! Form::input('date','date_fin', null, ['class' => 'form-control']) !!}
    {!! $errors->first('date_fin', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::submit('Mettre à jour', ['class' => 'btn btn-success']) !!}
</div>