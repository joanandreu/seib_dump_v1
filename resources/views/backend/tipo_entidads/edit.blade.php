@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Entidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoEntidad, ['route' => ['backend.tipoEntidads.update', $tipoEntidad->id], 'method' => 'patch']) !!}

                        @include('backend.tipo_entidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection