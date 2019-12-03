<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    {{-- <img src="{{ asset('') }}" alt="user-img" class="img-circle"> --}}
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                        data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">{{Auth::User()->name}}
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{route('usuarios.show',Auth::User()->id)}}" class="dropdown-item">
                            <i class="ti-user"></i> Mi perfil</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Cerrar Sesion</a>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    @can('modulo_usuario.acceso')
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Usuario</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @can('permisos.acceso')
                        <li>
                            <a href="{{ route('permisos.index')}}">Gestionar Permisos</a>
                        </li>
                        @endcan
                        @can('roles.acceso')
                        <li>
                            <a href="{{ route('roles.index')}}">Gestionar Roles</a>
                        </li>
                        @endcan
                        @can('usuario.acceso')
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Usuario</a>
                        </li>
                        @endcan
                    </ul>
                    @endcan
                    @can('modulo_empresa.acceso')
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Empresa</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @can('empresa.acceso')
                        <li>
                            <a href="{{ route('empresa.index')}}">Gestionar Empresa</a>
                        </li>
                        @endcan
                        @can('encargado_empresa.acceso')
                        <li>
                            <a href="{{ route('encargadoempresa.index') }}">Gestionar Encargado de Empresa</a>
                        </li>
                        @endcan
                        @can('sucursal.acceso')
                        <li>
                            <a href="{{ route('sucursal.index') }}">Gestionar Sucursal</a>
                        </li>
                        @endcan
                        @can('horario.acceso')
                        <li>
                            <a href="#">Gestionar Horario de Atencion</a>
                        </li>
                        @endcan
                        @can('categoria.acceso')
                        <li>
                            <a href="{{ route('categoria.index') }}">Gestionar Categoria</a>
                        </li>
                        @endcan
                    </ul>
                    @endcan
                    @can('modulo_sucursal.acceso')
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Sucursales</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            @can('producto.acceso')
                            <a href="{{ route('producto.index') }}">Gestionar Producto</a>
                            @endcan
                        </li>
                        <li>
                            @can('encargado_sucursal.acceso')
                            <a href="{{ route('encargadosucursal.index') }}">Gestionar Encargado Sucursal</a>
                            @endcan
                        </li>
                        <li>
                            @can('oferta_producto.acceso')
                            <a href="{{ route('ofertaproducto.index') }}">Gestionar Ofertas de Productos</a>
                            @endcan
                        </li>
                        <li>
                            @can('entrega.acceso')
                            <a href="#">Gestionar Entrega</a>
                            @endcan
                        </li>
                    </ul>
                    @endcan
                    @can('modulo_cliente.acceso')
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Clientes</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            @can('reserva.acceso')
                            <a href="#">Gestionar Reserva</a>
                            @endcan
                        </li>
                        <li>
                            @can('suscripcion.acceso')
                            <a href="#">Gestionar Suscripcion</a>
                            @endcan
                        </li>
                        <li>
                            @can('cliente.acceso')
                            <a href="#">Gestionar Cliente</a>
                            @endcan
                        </li>
                    </ul>
                    @endcan
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>