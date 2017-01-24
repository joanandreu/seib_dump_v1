@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Material
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoMaterial, ['route' => ['backend.tipoMaterials.update', $tipoMaterial->id], 'method' => 'patch']) !!}

                        @include('backend.tipo_materials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection