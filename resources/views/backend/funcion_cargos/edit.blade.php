@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Funcion Cargo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($funcionCargo, ['route' => ['backend.funcionCargos.update', $funcionCargo->id], 'method' => 'patch']) !!}

                        @include('backend.funcion_cargos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection