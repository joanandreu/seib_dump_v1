<table class="table table-responsive" id="recursos-table">
    <thead>
        <th>Cod Recurso</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Fk Tipo Riesgo</th>
        <th>Fk Tipo Recurso Humano</th>
        <th>Fk Material</th>
        <th>Fk Entidad Recurso</th>
        <th>Fk Entidad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($recursos as $recurso)
        <tr>
            <td>{!! $recurso->cod_recurso !!}</td>
            <td>{!! $recurso->descripcion !!}</td>
            <td>{!! $recurso->cantidad !!}</td>
            <td>{!! $recurso->fk_tipo_riesgo !!}</td>
            <td>{!! $recurso->fk_tipo_recurso_humano !!}</td>
            <td>{!! $recurso->fk_material !!}</td>
            <td>{!! $recurso->fk_entidad_recurso !!}</td>
            <td>{!! $recurso->fk_entidad !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.recursos.destroy', $recurso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.recursos.show', [$recurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.recursos.edit', [$recurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>