<!-- Sidebar de la pagina -->

<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li><a href="{{ route('home')}}"><i class="ti-home"></i> <span>Dashboard</span></a></li>

                <li><a href="{{ route('empresa.index')}}"><i class="ti-palette"></i> <span>Gestionar Empresas</span></a>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Modulo Usuarios</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('permisos.index')}}"><span>Gestionar Permisos</span></a></li>
                        <li><a href="{{route('roles.index')}}"><span>Gestionar Roles</span></a></li>
                        <li><a href="{{route('usuarios.index')}}"><span>Gestionar Usuarios</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Modulo Activos</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('asignacion.index')}}"><span>Gestionar Asignacion</span></a></li>
                        <li><a href="{{route('activo.index')}}"><span>Gestionar Activo</span></a></li>
                        <li><a href="{{route('estado.index')}}"><span>Gestionar Estado</span></a></li>
                        <li><a href="{{route('ubicacion.index')}}"><span>Gestionar Ubicacion</span></a></li>
                        <li><a href="{{route('bien.index')}}"><span>Gestionar Bien</span></a></li>
                    </ul>
                </li>


                @role('GestionarUsuario')

                <li class="has-sub-menu"><a href="#"><i class="ti-stamp"></i> <span>Icons</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="icons-cryptocurrency.html"><span>Cryptocurrency</span></a></li>
                        <li><a href="icons-fontawesome.html"><span>Font Awesome</span></a></li>
                        <li><a href="icons-material.html"><span>Material Icon</span></a></li>
                        <li><a href="icons-themify.html"><span>Themify Icon</span></a></li>
                    </ul>
                </li>
                @endrole


            </ul>
        </nav>

    </div>
</div>