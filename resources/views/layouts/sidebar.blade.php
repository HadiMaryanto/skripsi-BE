<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">WebGis</span>
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="assets/img/userbig.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Tugas Akhir</div>
              @auth
              <div class="user-role">{{auth()->user()->email}}</div>              
              @endauth              
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li><a class="nav-link" href="{{url('dashboard')}}"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
            <li><a class="nav-link" href="{{url('data')}}"><i data-feather="folder"></i><span>Data</span></a></li>


            <li class="menu-header">Maps</li>
            <li><a class="nav-link" href="{{url('map')}}"><i data-feather="map-pin"></i><span>Visualisasi</span></a></li>

          </ul>
        </aside>
      </div>