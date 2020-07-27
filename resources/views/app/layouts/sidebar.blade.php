<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
      <nav
        class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0"
      >
        <a
          class="navbar-brand w-100 mr-0"
          href="#"
          style="line-height: 25px;"
        >
          <div class="d-table m-auto">
            <img
              id="main-logo"
              class="d-inline-block align-top mr-1"
              style="max-width: 100px; margin-top: -30px;"
              src="../img/logo.png"
              alt="Day To Day"
            />
          </div>
        </a>
        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
          <i class="material-icons">&#xE5C4;</i>
        </a>
      </nav>
    </div>
    <form
      action="#"
      class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none"
    >
      <div class="input-group input-group-seamless ml-3">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-search"></i>
          </div>
        </div>
        <input
          class="navbar-search form-control"
          type="text"
          placeholder="Search for something..."
          aria-label="Search"
        />
      </div>
    </form>
    <div class="nav-wrapper" style="overflow-y: auto;">
      <h6 class="main-sidebar__nav-title">Aplicaciones</h6>
      <ul class="nav nav--no-borders flex-column">
        <li class="nav-item">
        <a class="nav-link @yield('Diario_de_vida')" href="{{url('Diario_de_vida')}}">
            <i class="material-icons">menu_book</i>
            <span>Diario Personal</span>
          </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link @yield('Listas_y_prioridades')" href="{{url('Listas_y_prioridades')}}"  >
            <i class="material-icons">fact_check</i>
            <span>Listas y prioridades</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link @yield('Objetivos_y_metas')" href="{{url('Objetivos_y_metas')}}">
            <i class="material-icons">leaderboard</i>
            <span>Objetivos y metas</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link @yield('Tu_peso_ideal')" href="{{url('Tu_peso_ideal')}}">
            <i class="material-icons">fitness_center</i>
            <span>Tu peso ideal</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link @yield('Enlaces_secretos')" href="{{url('Enlaces_secretos')}}">
            <i class="material-icons">web</i>
            <span>Enlaces secretos</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link @yield('Agenda_telefonica')" href="{{url('Agenda_telefonica')}}">
            <i class="material-icons">contact_phone</i>
            <span>Agenda telefonica</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link @yield('Frases_motivadoras')" href="{{url('Frases_motivadoras')}}">
            <i class="material-icons">favorite</i>
            <span>Frases Motivadoras</span>
          </a>
        </li> 
      </ul>
      @yield('filters')
    </div>
  </aside>