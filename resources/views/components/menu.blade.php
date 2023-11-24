<nav class="mt-2 ">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ setMenuActive('home') }}">
            <i class="nav-icon fas fa-home"></i>
            <p>Accueil</p>
            </a>
        </li>

        <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuActive('admin.habilitations.', 'active') }}">
                <i class="nav-icon fas fa-key"></i>
                <p>
                Habilitations
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.habilitations.users.index') }}" class="nav-link {{ setMenuActive('admin.habilitations.users.index') }}">
                    <i class="nav-icon fas fa-user mr-2"></i>
                    <p>Utilisateurs</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ setMenuClass('admin.gestions.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuActive('admin.gestions.', 'active') }}">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                Gestion
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.gestions.users.index') }}" class="nav-link {{ setMenuActive('admin.gestions.users.index') }}">
                    <i class="nav-icon fas fa-users mr-2"></i>
                    <p>Client</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
