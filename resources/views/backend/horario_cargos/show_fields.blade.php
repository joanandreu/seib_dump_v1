<!-- Id Cargo Field -->
<div class="form-group">
    {!! Form::label('id_cargo', 'Id Cargo:') !!}
    <p>{!! $horarioCargos->id_cargo !!}</p>
</div>

<!-- Fk Entidad Field -->
<div class="form-group">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    <p>{!! $horarioCargos->fk_entidad !!}</p>
</div>

<!-- Fk Horario Field -->
<div class="form-group">
    {!! Form::label('fk_horario', 'Fk Horario:') !!}
    <p>{!! $horarioCargos->fk_horario !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $horarioCargos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $horarioCargos->updated_at !!}</p>
</div>

