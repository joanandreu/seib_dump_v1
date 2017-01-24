@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Material
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($material, ['route' => ['backend.materials.update', $material->id], 'method' => 'patch']) !!}

                        @include('backend.materials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection