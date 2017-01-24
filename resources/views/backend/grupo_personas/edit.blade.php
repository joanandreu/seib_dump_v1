@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grupo Personas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grupoPersonas, ['route' => ['backend.grupoPersonas.update', $grupoPersonas->id], 'method' => 'patch']) !!}

                        @include('backend.grupo_personas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection