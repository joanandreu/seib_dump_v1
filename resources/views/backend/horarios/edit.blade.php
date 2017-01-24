@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Horario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($horario, ['route' => ['backend.horarios.update', $horario->id], 'method' => 'patch']) !!}

                        @include('backend.horarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection