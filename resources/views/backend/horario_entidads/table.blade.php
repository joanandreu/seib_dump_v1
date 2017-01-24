<table class="table table-responsive" id="horarioEntidads-table">
    <thead>
        <th>Fk Horario</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($horarioEntidads as $horarioEntidad)
        <tr>
            <td>{!! $horarioEntidad->fk_horario !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.horarioEntidads.destroy', $horarioEntidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.horarioEntidads.show', [$horarioEntidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.horarioEntidads.edit', [$horarioEntidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>