<!-- Fk Persona Field -->
<div class="form-group">
    {!! Form::label('fk_persona', 'Fk Persona:') !!}
    <p>{!! $horarioPersona->fk_persona !!}</p>
</div>

<!-- Fk Horario Field -->
<div class="form-group">
    {!! Form::label('fk_horario', 'Fk Horario:') !!}
    <p>{!! $horarioPersona->fk_horario !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $horarioPersona->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $horarioPersona->updated_at !!}</p>
</div>

