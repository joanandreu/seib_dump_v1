<table class="table table-responsive" id="plans-table">
    <thead>
        <th>Tipo</th>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($plans as $plan)
        <tr>
            <td>{!! $plan->tipo !!}</td>
            <td>{!! $plan->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.plans.destroy', $plan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.plans.show', [$plan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.plans.edit', [$plan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>