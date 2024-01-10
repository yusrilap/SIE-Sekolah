<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-3">
            <a href="">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
        </div>
        <ul class="sidebar-menu">
            @if (Auth::check() && Auth::user()->roles == 'admin')
                <li class="{{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-header">Master Data</li>

                <li class="{{ request()->routeIs('jurusan.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('jurusan.index') }}"><i class="fas fa-book"></i> <span>Jurusan</span></a></li>

                <li class="{{ request()->routeIs('ekstrakulikuler.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('ekstrakulikuler.index') }}"><i class="fas fa-users"></i>
                        <span>Ekstrakulikuler</span></a>
                </li>

                <li class="{{ request()->routeIs('guru.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('guru.index') }}"><i class="fas fa-user"></i> <span>Guru</span></a></li>

                <li class="{{ request()->routeIs('kelas.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('kelas.index') }}"><i class="far fa-building"></i> <span>Kelas</span></a></li>

                <li class="{{ request()->routeIs('siswa.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('siswa.index') }}"><i class="fas fa-users"></i> <span>Siswa</span></a></li>

                <li class="{{ request()->routeIs('jadwal.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('jadwal.index') }}"><i class="fas fa-calendar"></i> <span>Informasi</span></a>
                </li>
                <li class="{{ request()->routeIs('schedule.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('schedule.index') }}"><i class="fas fa-calendar"></i> <span>Schedule</span></a>
                </li>

                <li class="{{ request()->routeIs('user.*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('user.index') }}"><i class="fas fa-user"></i> <span>User</span></a></li>
            @endif

        </ul>
    </aside>
</div>
