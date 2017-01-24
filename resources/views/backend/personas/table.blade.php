<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Nombre</th>
        <th>Ape1</th>
        <th>Ape2</th>
        <th>Indicativo</th>
        <th>Comentarios</th>
        <th>Fk Cargo</th>
        <th>Fk Entidad</th>
        <th>Fecha Alta</th>
        <th>Fecha Caducidad</th>
        <th>Fk Tipo Envio</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{!! $persona->nombre !!}</td>
            <td>{!! $persona->ape1 !!}</td>
            <td>{!! $persona->ape2 !!}</td>
            <td>{!! $persona->indicativo !!}</td>
            <td>{!! $persona->comentarios !!}</td>
            <td>{!! $persona->fk_cargo !!}</td>
            <td>{!! $persona->fk_entidad !!}</td>
            <td>{!! $persona->fecha_alta !!}</td>
            <td>{!! $persona->fecha_caducidad !!}</td>
            <td>{!! $persona->fk_tipo_envio !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.personas.destroy', $persona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>