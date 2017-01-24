<table class="table table-responsive" id="tipoTelefonos-table">
    <thead>
        <th>Tipo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoTelefonos as $tipoTelefono)
        <tr>
            <td>{!! $tipoTelefono->tipo !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipoTelefonos.destroy', $tipoTelefono->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipoTelefonos.show', [$tipoTelefono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipoTelefonos.edit', [$tipoTelefono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>