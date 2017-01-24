<table class="table table-responsive" id="horarioPersonas-table">
    <thead>
        <th>Fk Horario</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($horarioPersonas as $horarioPersona)
        <tr>
            <td>{!! $horarioPersona->fk_horario !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.horarioPersonas.destroy', $horarioPersona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.horarioPersonas.show', [$horarioPersona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.horarioPersonas.edit', [$horarioPersona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>