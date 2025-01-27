<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('agents.index') }}">
          <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
          <span class="menu-title">Agent</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('testimonials.index') }}">
          <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
          <span class="menu-title">Client</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
          <span class="menu-title">service</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('abouts.index') }}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">A propos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('infos.index') }}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">information</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('services.index') }}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Services</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('quotes.index') }}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Quote</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('partenaires.index') }}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Partenaire</span>
        </a>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="user-details">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <div class="d-flex align-items-center">
                <div class="sidebar-profile-img">
                  <img src="  {{asset('vivicorpAdmin/assets/images/faces/face28.png')}} " alt="image">
                </div>
                <div class="sidebar-profile-text">
                  <p class="mb-1">Henry Klein</p>
                </div>
              </div>
            </div>
            <div class="badge badge-danger">3</div>
          </div>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
            <span class="menu-title">Settings</span>
          </a>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
            <span class="menu-title">Take Tour</span></a>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf
              <button style="background: none;
              border: none;
              cursor: pointer;
              padding: 0;
              font-size: inherit;
              font-family: inherit;" class="nav-link" href="#" @click.prevent="$root.submit();">
                <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">{{ __('Log Out') }}</span>
              </button>
          </a>
        </div>
      </li>
    </ul>
  </nav>