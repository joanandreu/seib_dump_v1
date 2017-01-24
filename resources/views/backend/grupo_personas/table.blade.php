<table class="table table-responsive" id="grupoPersonas-table">
    <thead>
        <th>Fk Persona</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($grupoPersonas as $grupoPersonas)
        <tr>
            <td>{!! $grupoPersonas->fk_persona !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.grupoPersonas.destroy', $grupoPersonas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.grupoPersonas.show', [$grupoPersonas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.grupoPersonas.edit', [$grupoPersonas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>