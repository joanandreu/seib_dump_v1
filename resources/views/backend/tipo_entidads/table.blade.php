<table class="table table-responsive" id="tipoEntidads-table">
    <thead>
        <th>Nombre</th>
        <th>Nombre Abrv</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoEntidads as $tipoEntidad)
        <tr>
            <td>{!! $tipoEntidad->nombre !!}</td>
            <td>{!! $tipoEntidad->nombre_abrv !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipoEntidads.destroy', $tipoEntidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipoEntidads.show', [$tipoEntidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipoEntidads.edit', [$tipoEntidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>