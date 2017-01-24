<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $material->id !!}</p>
</div>

<!-- Fk Loc Field -->
<div class="form-group">
    {!! Form::label('fk_loc', 'Fk Loc:') !!}
    <p>{!! $material->fk_loc !!}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{!! $material->modelo !!}</p>
</div>

<!-- Matricula Field -->
<div class="form-group">
    {!! Form::label('matricula', 'Matricula:') !!}
    <p>{!! $material->matricula !!}</p>
</div>

<!-- Transporte Field -->
<div class="form-group">
    {!! Form::label('transporte', 'Transporte:') !!}
    <p>{!! $material->transporte !!}</p>
</div>

<!-- Grua Field -->
<div class="form-group">
    {!! Form::label('grua', 'Grua:') !!}
    <p>{!! $material->grua !!}</p>
</div>

<!-- Fk Tipo Material Field -->
<div class="form-group">
    {!! Form::label('fk_tipo_material', 'Fk Tipo Material:') !!}
    <p>{!! $material->fk_tipo_material !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $material->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $material->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $material->deleted_at !!}</p>
</div>

