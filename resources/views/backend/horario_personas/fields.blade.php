<!-- Fk Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_horario', 'Fk Horario:') !!}
    {!! Form::number('fk_horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.horarioPersonas.index') !!}" class="btn btn-default">Cancel</a>
</div>
