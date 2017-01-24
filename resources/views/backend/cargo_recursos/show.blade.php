@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cargo Recurso
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('backend.cargo_recursos.show_fields')
                    <a href="{!! route('backend.cargoRecursos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
