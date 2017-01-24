<table class="table table-responsive" id="entidads-table">
    <thead>
        <th>Fk Tipo Entidad</th>
        <th>Nombre</th>
        <th>Nombre Abrv</th>
        <th>Fk Horario</th>
        <th>Fk Entidad</th>
        <th>Comentarios</th>
        <th>Cif</th>
        <th>Fk Cnae</th>
        <th>Actividad</th>
        <th>Fk Loc</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($entidads as $entidad)
        <tr>
            <td>{!! $entidad->fk_tipo_entidad !!}</td>
            <td>{!! $entidad->nombre !!}</td>
            <td>{!! $entidad->nombre_abrv !!}</td>
            <td>{!! $entidad->fk_horario !!}</td>
            <td>{!! $entidad->fk_entidad !!}</td>
            <td>{!! $entidad->comentarios !!}</td>
            <td>{!! $entidad->cif !!}</td>
            <td>{!! $entidad->fk_cnae !!}</td>
            <td>{!! $entidad->actividad !!}</td>
            <td>{!! $entidad->fk_loc !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.entidads.destroy', $entidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.entidads.show', [$entidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.entidads.edit', [$entidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>