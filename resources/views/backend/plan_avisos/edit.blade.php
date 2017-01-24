@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Aviso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planAviso, ['route' => ['backend.planAvisos.update', $planAviso->id], 'method' => 'patch']) !!}

                        @include('backend.plan_avisos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection