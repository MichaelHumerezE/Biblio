<!-- ********************************SIDEBAR-PANEL************************************************************** -->
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/home') }}">
            <span class="align-middle"><img src="{{ asset('img/Logo.png') }}" width=200px></span>
        </a>
        <!-- *******************************USUARIOS*********************************************** -->
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                USUARIOS
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="{{ url('administrador/empleados') }}">
                    <i class="fa fa-user-tie"></i> <span class="align-middle">Gestionar Empleados</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('administrador/clientes') }}">
                    <i class="fa fa-user"></i> <span class="align-middle">Gestionar Clientes</span>
                </a>
            </li>

            <!-- *******************************USUARIOS*********************************************** -->
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Archivos
                </li>

                <li class="sidebar-item ">
                    <a class="sidebar-link" href="{{ url('administrador/documentos') }}">
                        <i class="align-middle" data-feather="grid"></i> <span class="align-middle"> Gestionar Documentos</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Documento 2</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Documento 3</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle">Documento 4</span>
                    </a>
                </li>

                <!-- ***********************************ASISTENCIAS****************************************************************************** -->
                <li class="sidebar-header">
                    Solicitudes
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="shopping-bag"></i> <span
                            class="align-middle">Prestamos</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-cta">
            </div>
    </div>
</nav>
