<div class="mdk-drawer  js-mdk-drawer" id="default-drawer"  data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t"
                data-perfect-scrollbar>
            <div class="sidebar-heading">Menu</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item {{ ((request()->segment(1) == 'dashboard')) ? 'active' : '' }}">
                    <a class="sidebar-menu-button"
                        href="{{ url('dashboard') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ ((request()->segment(1) == 'users')) ? 'active' : '' }}">
                    <a class="sidebar-menu-button"
                        href="{{ url('users') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                        <span class="sidebar-menu-text">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
