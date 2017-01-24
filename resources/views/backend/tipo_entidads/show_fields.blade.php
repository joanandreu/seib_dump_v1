<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoEntidad->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $tipoEntidad->nombre !!}</p>
</div>

<!-- Nombre Abrv Field -->
<div class="form-group">
    {!! Form::label('nombre_abrv', 'Nombre Abrv:') !!}
    <p>{!! $tipoEntidad->nombre_abrv !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoEntidad->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoEntidad->updated_at !!}</p>
</div>

