<table class="table table-responsive" id="horarios-table">
    <thead>
        <th>Nombre</th>
        <th>Nombre Abr</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($horarios as $horario)
        <tr>
            <td>{!! $horario->nombre !!}</td>
            <td>{!! $horario->nombre_abr !!}</td>
            <td>{!! $horario->hora_inicio !!}</td>
            <td>{!! $horario->hora_fin !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.horarios.destroy', $horario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.horarios.show', [$horario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.horarios.edit', [$horario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>