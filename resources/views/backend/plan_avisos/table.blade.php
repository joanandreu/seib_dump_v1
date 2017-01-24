<table class="table table-responsive" id="planAvisos-table">
    <thead>
        <th>Fk Plan</th>
        <th>Fk Cargo</th>
        <th>Fk Entidad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($planAvisos as $planAviso)
        <tr>
            <td>{!! $planAviso->fk_plan !!}</td>
            <td>{!! $planAviso->fk_cargo !!}</td>
            <td>{!! $planAviso->fk_entidad !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.planAvisos.destroy', $planAviso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.planAvisos.show', [$planAviso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.planAvisos.edit', [$planAviso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>