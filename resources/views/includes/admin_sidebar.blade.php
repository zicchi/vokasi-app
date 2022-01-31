<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin::dashboard')}}">Vokasi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin::dashboard')}}">V</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{request()->is('admin/dashboard*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            @if(auth('admin')->user()->role == 'admin')
                <li class="{{request()->is('admin/users*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::users::index')}}"><i class="fas fa-user"></i> <span>User</span></a></li>
                <li class="{{request()->is('admin/presences*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::presences::index')}}"><i class="fas fa-calendar"></i> <span>Log</span></a></li>
                <li class="{{request()->is('admin/admins*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::admins::index')}}"><i class="fas fa-user"></i> <span>Admin</span></a></li>
            @endif
        </ul>
    </aside>
</div>
