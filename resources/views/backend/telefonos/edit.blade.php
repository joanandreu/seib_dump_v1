@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Telefono
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($telefono, ['route' => ['backend.telefonos.update', $telefono->id], 'method' => 'patch']) !!}

                        @include('backend.telefonos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection