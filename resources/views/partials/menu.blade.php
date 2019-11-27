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
                <li class="nav-small-cap">--- PERSONAL</li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Usuario</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{route('permisos.index')}}">Gestionar Permisos</a>
                        </li>
                        <li>
                            <a href="{{route('roles.index')}}">Gestionar roles</a>
                        </li>
                        <li>
                            <a href="{{route('usuarios.index')}}">Gestionar Usuario</a>
                        </li>
                    </ul>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Empresa</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('permisos.index')}}">Gestionar Empresa</a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index')}}">Gestionar Encargado de Empresa</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Sucursal</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Horario de Atencion</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Categoria</a>
                        </li>
                    </ul>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Sucursales</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('permisos.index')}}">Gestionar Producto</a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index')}}">Gestionar Encargado Sucursal</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Ofertas de Productos</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Entrega</a>
                        </li>
                    </ul>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Modulo Clientes</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('permisos.index')}}">Gestionar Reserva</a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index')}}">Gestionar Suscripcion</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios.index')}}">Gestionar Cliente</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>