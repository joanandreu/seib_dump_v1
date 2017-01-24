@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Recurso Humano
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoRecursoHumano, ['route' => ['backend.tipoRecursoHumanos.update', $tipoRecursoHumano->id], 'method' => 'patch']) !!}

                        @include('backend.tipo_recurso_humanos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection