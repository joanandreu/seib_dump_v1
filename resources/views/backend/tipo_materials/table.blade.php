<table class="table table-responsive" id="tipoMaterials-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoMaterials as $tipoMaterial)
        <tr>
            <td>{!! $tipoMaterial->nombre !!}</td>
            <td>{!! $tipoMaterial->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipoMaterials.destroy', $tipoMaterial->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipoMaterials.show', [$tipoMaterial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipoMaterials.edit', [$tipoMaterial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>