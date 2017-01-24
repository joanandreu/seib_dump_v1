<table class="table table-responsive" id="cargos-table">
    <thead>
        <th>Cargo</th>
        <th>Fk Entidad</th>
        <th>Fk Funcion Cargo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cargos as $cargo)
        <tr>
            <td>{!! $cargo->cargo !!}</td>
            <td>{!! $cargo->fk_entidad !!}</td>
            <td>{!! $cargo->fk_funcion_cargo !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.cargos.destroy', $cargo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.cargos.show', [$cargo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.cargos.edit', [$cargo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>