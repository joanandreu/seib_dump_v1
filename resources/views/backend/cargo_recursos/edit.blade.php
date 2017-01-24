@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cargo Recurso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cargoRecurso, ['route' => ['backend.cargoRecursos.update', $cargoRecurso->id], 'method' => 'patch']) !!}

                        @include('backend.cargo_recursos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection