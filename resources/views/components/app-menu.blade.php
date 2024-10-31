@props(['type_user' => ''])

@if ($type_user == '1')
    <!-- Inicio -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center p-2" href="{{ route('Users.home') }}">
            <div class="sidebar-brand-icon">
                <img src="/img/autobus.png" alt="" width="50" height="50">
            </div>
            <div class="sidebar-brand-text mx-3">

            </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('Paradas.listado') }}"> <i class="fas fa-fw fa-map-marker"></i>
                <span>Paradas</span>
            </a>
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('buses.index') }}"> <i class="fas fa-fw fa-bus"></i>
                <span>Autobuses</span>
            </a>
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('rutas.home') }}"> <i class="fas fa-fw fa-map"></i>
                <span>Rutas</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <!--<li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Autobuses</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Listado</a>
                    <a class="collapse-item" href="cards.html">Asignar rutas</a>
                </div>
            </div>
        </li>-->

    </ul>
@endif


@if ($type_user == '2')
    <!-- Inicio -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center p-2" href="{{ route('Users.home') }}">
            <div class="sidebar-brand-icon">
                <img src="/img/autobus.png" alt="" width="50" height="50">
            </div>
            <div class="sidebar-brand-text mx-3">

            </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

       <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-search"></i>
                <span>Consultas</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opciones</h6>
                    <a class="collapse-item" href="{{ route('parada.search') }}">Paradas</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    </ul>
@endif

<!-- End of Sidebar -->

<!-- Fin -->
