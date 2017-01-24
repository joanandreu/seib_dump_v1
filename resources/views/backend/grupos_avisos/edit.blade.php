@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grupos Aviso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gruposAviso, ['route' => ['backend.gruposAvisos.update', $gruposAviso->id], 'method' => 'patch']) !!}

                        @include('backend.grupos_avisos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection