@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Recurso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoRecurso, ['route' => ['backend.tipoRecursos.update', $tipoRecurso->id], 'method' => 'patch']) !!}

                        @include('backend.tipo_recursos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection