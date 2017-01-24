<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_persona', 'Fk Persona:') !!}
    {!! Form::number('fk_persona', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    {!! Form::number('fk_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cargo', 'Fk Cargo:') !!}
    {!! Form::number('fk_cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orden', 'Orden:') !!}
    {!! Form::number('orden', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cargo Org Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cargo_org', 'Fk Cargo Org:') !!}
    {!! Form::number('fk_cargo_org', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.emails.index') !!}" class="btn btn-default">Cancel</a>
</div>
