<table class="table table-responsive" id="materials-table">
    <thead>
        <th>Fk Loc</th>
        <th>Modelo</th>
        <th>Matricula</th>
        <th>Transporte</th>
        <th>Grua</th>
        <th>Fk Tipo Material</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($materials as $material)
        <tr>
            <td>{!! $material->fk_loc !!}</td>
            <td>{!! $material->modelo !!}</td>
            <td>{!! $material->matricula !!}</td>
            <td>{!! $material->transporte !!}</td>
            <td>{!! $material->grua !!}</td>
            <td>{!! $material->fk_tipo_material !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.materials.destroy', $material->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.materials.show', [$material->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.materials.edit', [$material->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>