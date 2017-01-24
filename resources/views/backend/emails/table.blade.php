<table class="table table-responsive" id="emails-table">
    <thead>
        <th>Email</th>
        <th>Comentarios</th>
        <th>Fk Persona</th>
        <th>Fk Entidad</th>
        <th>Fk Cargo</th>
        <th>Orden</th>
        <th>Fk Cargo Org</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($emails as $email)
        <tr>
            <td>{!! $email->email !!}</td>
            <td>{!! $email->comentarios !!}</td>
            <td>{!! $email->fk_persona !!}</td>
            <td>{!! $email->fk_entidad !!}</td>
            <td>{!! $email->fk_cargo !!}</td>
            <td>{!! $email->orden !!}</td>
            <td>{!! $email->fk_cargo_org !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.emails.destroy', $email->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.emails.show', [$email->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.emails.edit', [$email->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>