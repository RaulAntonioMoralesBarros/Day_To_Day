<div class="main-navbar sticky-top bg-white">
    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">

        {{-- search --}}
        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
            <div class="input-group input-group-seamless ml-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <input class="navbar-search form-control" type="text" placeholder="Buscardor..." aria-label="Search" />
            </div>
        </form>
        {{-- /search --}}

        <ul class="navbar-nav border-left flex-row">

            {{-- notifications --}}
            <li class="nav-item border-right dropdown notifications">
                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                        <i class="material-icons">&#xE7F4;</i>
                        <span class="badge badge-pill badge-danger">2</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <div class="notification__content">
                            <span class="notification__category">Ordenar la cocina</span>
                            <p>
                                No contiene nota.
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="notification__content">
                            <span class="notification__category">Ver television</span>
                            <p>
                                Cambiar el canal al 820 porque van a dar el chavo del
                                8.
                                <span class="text-semibold">
                                    <i class="material-icons"></i>
                                    Personal</span>
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#">
                        Ver todas las notificaciones
                    </a>
                </div>
            </li>
            {{-- /notifications --}}

            {{-- perfil user and configurations --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="img/avatars/1.png" alt="User Avatar" />
                    <span class="d-none d-md-inline-block">Raúl Antonio</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                <a class="dropdown-item" href="{{url('Estadisticas')}}">
                        <i class="material-icons"></i> Estadisticas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Fotos.html">
                        <i class="material-icons">image</i> Fotos</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="Fotos.html">
                        <i class="material-icons">dvr</i> Plantillas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Fotos.html">
                        <i class="material-icons">person_add</i> Invitar</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="perfil.html">
                        <i class="material-icons">settings</i> Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{url('Login')}}">
                        <i class="material-icons text-danger">&#xE879;</i> Salir
                    </a>
                </div>
            </li>
            {{-- /perfil user and configurations --}}
        </ul>

        <nav class="nav">
            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
            </a>
        </nav>
    </nav>
</div>
