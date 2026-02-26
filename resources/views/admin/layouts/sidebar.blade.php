<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index-2.html">PPDB</a>
    </div>
    
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index-2.html">PPDB</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      
      <li class="dropdown {{ request()->routeIs('beranda') ? 'active' : '' }}">
        <a href="{{ route('beranda') }}" class="nav-link has">
          <i class="fas fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>

      <li class="menu-header">Pendaftaran</li>

      <li class="dropdown {{ request()->routeIs('user') ? 'active' : '' }}">
        <a  href="{{ route('user') }}" class="nav-link has">
          <i class="far fa-user"></i>
          <span>User</span>
        </a>
      </li>

      <li class="dropdown {{ request()->routeIs('jurusan') ? 'active' : '' }}">
        <a href="{{ route('jurusan') }}" class="nav-link has">
          <i class="fas fa-graduation-cap"></i>
          <span>Jurusan</span>
        </a>
      </li>

      
      <li class="dropdown {{ request()->routeIs('pendaftaran') ? 'active' : '' }}">
        <a href="{{ route('pendaftaran') }}" class="nav-link has">
          <i class="fas fa-book"></i>
          <span>Pendaftaran</span>
        </a>
      </li>

    </ul>
  </aside>
</div>