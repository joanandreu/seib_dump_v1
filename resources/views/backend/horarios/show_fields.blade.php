<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $horario->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $horario->nombre !!}</p>
</div>

<!-- Nombre Abr Field -->
<div class="form-group">
    {!! Form::label('nombre_abr', 'Nombre Abr:') !!}
    <p>{!! $horario->nombre_abr !!}</p>
</div>

<!-- Hora Inicio Field -->
<div class="form-group">
    {!! Form::label('hora_inicio', 'Hora Inicio:') !!}
    <p>{!! $horario->hora_inicio !!}</p>
</div>

<!-- Hora Fin Field -->
<div class="form-group">
    {!! Form::label('hora_fin', 'Hora Fin:') !!}
    <p>{!! $horario->hora_fin !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $horario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $horario->updated_at !!}</p>
</div>

