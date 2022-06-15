<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">Puskesmas</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Ts</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header"></li>
        <li @yield('dashboard')>
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="fas fa-columns"></i> <span>Dashboard</span>
            </a>
        </li>
        <li @yield('divisi')>
            <a class="nav-link" href="{{ route('divisi.index') }}">
                <i class="fas fa-columns"></i> <span>Divisi</span>
            </a>
        </li>
    </ul>
</aside>
