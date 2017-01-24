<li class="{{ Request::is('tipoEntidads*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoEntidads.index') !!}"><i class="fa fa-edit"></i><span>TipoEntidads</span></a>
</li>

<li class="{{ Request::is('tipoEnvios*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoEnvios.index') !!}"><i class="fa fa-edit"></i><span>TipoEnvios</span></a>
</li>

<li class="{{ Request::is('tipoMaterials*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoMaterials.index') !!}"><i class="fa fa-edit"></i><span>TipoMaterials</span></a>
</li>

<li class="{{ Request::is('tipoRecursoHumanos*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoRecursoHumanos.index') !!}"><i class="fa fa-edit"></i><span>TipoRecursoHumanos</span></a>
</li>

<li class="{{ Request::is('tipoRecursos*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoRecursos.index') !!}"><i class="fa fa-edit"></i><span>TipoRecursos</span></a>
</li>

<li class="{{ Request::is('tipoRiesgos*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoRiesgos.index') !!}"><i class="fa fa-edit"></i><span>TipoRiesgos</span></a>
</li>

<li class="{{ Request::is('tipoTelefonos*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoTelefonos.index') !!}"><i class="fa fa-edit"></i><span>TipoTelefonos</span></a>
</li>

