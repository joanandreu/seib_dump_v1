<table class="table table-responsive" id="cargoRecursos-table">
    <thead>
        <th>Fk Entidad</th>
        <th>Fk Recurso</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cargoRecursos as $cargoRecurso)
        <tr>
            <td>{!! $cargoRecurso->fk_entidad !!}</td>
            <td>{!! $cargoRecurso->fk_recurso !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.cargoRecursos.destroy', $cargoRecurso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.cargoRecursos.show', [$cargoRecurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.cargoRecursos.edit', [$cargoRecurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>