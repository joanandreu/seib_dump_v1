<table class="table table-responsive" id="localizacions-table">
    <thead>
        <th>Lid</th>
        <th>Municipio</th>
        <th>Nucleo</th>
        <th>Calle</th>
        <th>Numero</th>
        <th>Piso</th>
        <th>Escalaera</th>
        <th>Cp</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($localizacions as $localizacion)
        <tr>
            <td>{!! $localizacion->lid !!}</td>
            <td>{!! $localizacion->municipio !!}</td>
            <td>{!! $localizacion->nucleo !!}</td>
            <td>{!! $localizacion->calle !!}</td>
            <td>{!! $localizacion->numero !!}</td>
            <td>{!! $localizacion->piso !!}</td>
            <td>{!! $localizacion->escalaera !!}</td>
            <td>{!! $localizacion->cp !!}</td>
            <td>{!! $localizacion->longitude !!}</td>
            <td>{!! $localizacion->latitude !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.localizacions.destroy', $localizacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.localizacions.show', [$localizacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.localizacions.edit', [$localizacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>