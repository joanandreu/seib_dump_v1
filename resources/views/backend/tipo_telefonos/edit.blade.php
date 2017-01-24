@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Telefono
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoTelefono, ['route' => ['backend.tipoTelefonos.update', $tipoTelefono->id], 'method' => 'patch']) !!}

                        @include('backend.tipo_telefonos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection