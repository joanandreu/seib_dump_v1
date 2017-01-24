<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Abrv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_abrv', 'Nombre Abrv:') !!}
    {!! Form::text('nombre_abrv', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.tipoEntidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
