<table class="table table-responsive" id="tipoRecursos-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoRecursos as $tipoRecurso)
        <tr>
            <td>{!! $tipoRecurso->nombre !!}</td>
            <td>{!! $tipoRecurso->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipoRecursos.destroy', $tipoRecurso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipoRecursos.show', [$tipoRecurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipoRecursos.edit', [$tipoRecurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>