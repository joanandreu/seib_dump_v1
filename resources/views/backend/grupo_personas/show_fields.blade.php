<!-- Fk Grupo Field -->
<div class="form-group">
    {!! Form::label('fk_grupo', 'Fk Grupo:') !!}
    <p>{!! $grupoPersonas->fk_grupo !!}</p>
</div>

<!-- Fk Persona Field -->
<div class="form-group">
    {!! Form::label('fk_persona', 'Fk Persona:') !!}
    <p>{!! $grupoPersonas->fk_persona !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $grupoPersonas->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $grupoPersonas->updated_at !!}</p>
</div>

