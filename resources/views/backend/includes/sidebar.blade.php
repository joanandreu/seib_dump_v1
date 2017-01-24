<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>
            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-cubes"></i>
                    <span>Gestión de Entidades</span>
                </a>
            </li>

            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-exclamation-triangle "></i>
                    <span>Gestión de Riesgos</span>
                </a>
            </li>
            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-file-text-o"></i>
                    <span>Gestión de Planes</span>
                </a>
            </li>
           


            <li class="header">Administración</li>
            
            @permissions(['manage-users', 'manage-roles'])
                <li class="{{ Active::pattern('admin/access/*') }} treeview">
                    <a href="#">
                        <i class="fa fa-key"></i>
                        <span>{{ trans('menus.backend.access.title') }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu {{ Active::pattern('admin/access/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/access/*', 'display: block;') }}">
                        @permission('manage-users')
                            <li class="{{ Active::pattern('admin/access/user*') }}">
                                <a href="{{ route('admin.access.user.index') }}">
                                    <i class="fa fa-circle-o"></i>
                                    <span>{{ trans('labels.backend.access.users.management') }}</span>
                                </a>
                            </li>
                        @endauth

                        @permission('manage-roles')
                            <li class="{{ Active::pattern('admin/access/role*') }}">
                                <a href="{{ route('admin.access.role.index') }}">
                                    <i class="fa fa-circle-o"></i>
                                    <span>{{ trans('labels.backend.access.roles.management') }}</span>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </li>
            @endauth
            
            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Gestión de Logs</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    

                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        <a href="{{ route('admin.log-viewer::logs.list') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                        </a>
                    </li>
                </ul>
            </li>

                        <li class="{{ Active::pattern('backend/tipo*') }} treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Variables de la BD</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>


                <ul class="treeview-menu {{ Active::pattern('backend/tipo*', 'menu-open') }}" style="display: none; {{ Active::pattern('backend/tipo**', 'display: block;') }}">
                    

            
                      <!-- Sidebar Menu -->
@include('backend.layouts.menu')
                    <li class="{{ Request::is('tipoentidads*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-edit"></i><span>off</span></a>
                    </li>
                    <li class="{{ Request::is('tipocargos*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-edit"></i><span>off</span></a>
                    </li>
                    <!-- /.sidebar-menu -->
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>
