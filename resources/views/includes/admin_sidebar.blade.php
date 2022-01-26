<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin::dashboard')}}">Titian</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin::dashboard')}}">T</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{request()->is('admin/dashboard*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="{{request()->is('admin/users*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::users::index')}}"><i class="fas fa-user"></i> <span>User</span></a></li>
            <li class="{{request()->is('admin/presences*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::presences::index')}}"><i class="fas fa-calendar"></i> <span>Absensi</span></a></li>
        </ul>
    </aside>
</div>
