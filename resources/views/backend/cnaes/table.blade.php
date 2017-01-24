<table class="table table-responsive" id="cnaes-table">
    <thead>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Fk Grupo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cnaes as $cnae)
        <tr>
            <td>{!! $cnae->codigo !!}</td>
            <td>{!! $cnae->descripcion !!}</td>
            <td>{!! $cnae->fk_grupo !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.cnaes.destroy', $cnae->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.cnaes.show', [$cnae->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.cnaes.edit', [$cnae->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>