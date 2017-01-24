<table class="table table-responsive" id="telefonos-table">
    <thead>
        <th>Numero</th>
        <th>Fecha Alta</th>
        <th>Fecha Caducidad</th>
        <th>Fk Tipo Tel</th>
        <th>Fk Horario</th>
        <th>Fk Persona</th>
        <th>Fk Entidad</th>
        <th>Fk Cargo</th>
        <th>Orden</th>
        <th>Fk Cargo Org</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($telefonos as $telefono)
        <tr>
            <td>{!! $telefono->numero !!}</td>
            <td>{!! $telefono->fecha_alta !!}</td>
            <td>{!! $telefono->fecha_caducidad !!}</td>
            <td>{!! $telefono->fk_tipo_tel !!}</td>
            <td>{!! $telefono->fk_horario !!}</td>
            <td>{!! $telefono->fk_persona !!}</td>
            <td>{!! $telefono->fk_entidad !!}</td>
            <td>{!! $telefono->fk_cargo !!}</td>
            <td>{!! $telefono->orden !!}</td>
            <td>{!! $telefono->fk_cargo_org !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.telefonos.destroy', $telefono->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.telefonos.show', [$telefono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.telefonos.edit', [$telefono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>