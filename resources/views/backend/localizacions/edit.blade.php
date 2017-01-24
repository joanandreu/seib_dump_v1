@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Localizacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($localizacion, ['route' => ['backend.localizacions.update', $localizacion->id], 'method' => 'patch']) !!}

                        @include('backend.localizacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection