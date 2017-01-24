<table class="table table-responsive" id="gruposCnaes-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($gruposCnaes as $gruposCnae)
        <tr>
            <td>{!! $gruposCnae->nombre !!}</td>
            <td>{!! $gruposCnae->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.gruposCnaes.destroy', $gruposCnae->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.gruposCnaes.show', [$gruposCnae->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.gruposCnaes.edit', [$gruposCnae->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>