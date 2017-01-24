<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $email->id !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $email->email !!}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{!! $email->comentarios !!}</p>
</div>

<!-- Fk Persona Field -->
<div class="form-group">
    {!! Form::label('fk_persona', 'Fk Persona:') !!}
    <p>{!! $email->fk_persona !!}</p>
</div>

<!-- Fk Entidad Field -->
<div class="form-group">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    <p>{!! $email->fk_entidad !!}</p>
</div>

<!-- Fk Cargo Field -->
<div class="form-group">
    {!! Form::label('fk_cargo', 'Fk Cargo:') !!}
    <p>{!! $email->fk_cargo !!}</p>
</div>

<!-- Orden Field -->
<div class="form-group">
    {!! Form::label('orden', 'Orden:') !!}
    <p>{!! $email->orden !!}</p>
</div>

<!-- Fk Cargo Org Field -->
<div class="form-group">
    {!! Form::label('fk_cargo_org', 'Fk Cargo Org:') !!}
    <p>{!! $email->fk_cargo_org !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $email->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $email->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $email->deleted_at !!}</p>
</div>

