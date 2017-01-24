<table class="table table-responsive" id="tipoRecursoHumanos-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoRecursoHumanos as $tipoRecursoHumano)
        <tr>
            <td>{!! $tipoRecursoHumano->nombre !!}</td>
            <td>{!! $tipoRecursoHumano->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipoRecursoHumanos.destroy', $tipoRecursoHumano->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipoRecursoHumanos.show', [$tipoRecursoHumano->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipoRecursoHumanos.edit', [$tipoRecursoHumano->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>