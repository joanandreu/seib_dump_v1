<table class="table table-responsive" id="funcionCargos-table">
    <thead>
        <th>Descripcion</th>
        <th>Nombre</th>
        <th>Nombre Abr</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($funcionCargos as $funcionCargo)
        <tr>
            <td>{!! $funcionCargo->descripcion !!}</td>
            <td>{!! $funcionCargo->nombre !!}</td>
            <td>{!! $funcionCargo->nombre_abr !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.funcionCargos.destroy', $funcionCargo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.funcionCargos.show', [$funcionCargo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.funcionCargos.edit', [$funcionCargo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>