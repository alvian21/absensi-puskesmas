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
        @if (auth()->guard('web')->check())
            <li @yield('divisi')>
                <a class="nav-link" href="{{ route('divisi.index') }}">
                    <i class="fas fa-columns"></i> <span>Divisi</span>
                </a>
            </li>
            <li @yield('pegawai')>
                <a class="nav-link" href="{{ route('pegawai.index') }}">
                    <i class="fas fa-columns"></i> <span>Pegawai</span>
                </a>
            </li>
            <li @yield('laporan')>
                <a class="nav-link" href="{{ route('laporan.index') }}">
                    <i class="fas fa-columns"></i> <span>Laporan</span>
                </a>
            </li>
        @endif
        @if (auth()->guard('pegawai')->check())
            <li @yield('absensi')>
                <a class="nav-link" href="{{ route('absensi.index') }}">
                    <i class="fas fa-columns"></i> <span>Absensi</span>
                </a>
            </li>
        @endif
    </ul>
</aside>
