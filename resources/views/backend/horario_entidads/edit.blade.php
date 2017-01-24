@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Horario Entidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($horarioEntidad, ['route' => ['backend.horarioEntidads.update', $horarioEntidad->id], 'method' => 'patch']) !!}

                        @include('backend.horario_entidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection