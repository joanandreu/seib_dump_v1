<table class="table table-responsive" id="horarioCargos-table">
    <thead>
        <th>Fk Entidad</th>
        <th>Fk Horario</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($horarioCargos as $horarioCargos)
        <tr>
            <td>{!! $horarioCargos->fk_entidad !!}</td>
            <td>{!! $horarioCargos->fk_horario !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.horarioCargos.destroy', $horarioCargos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.horarioCargos.show', [$horarioCargos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.horarioCargos.edit', [$horarioCargos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>