@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grupos Cnae
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gruposCnae, ['route' => ['backend.gruposCnaes.update', $gruposCnae->id], 'method' => 'patch']) !!}

                        @include('backend.grupos_cnaes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection