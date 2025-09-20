<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- Brand -->
    <div class="app-brand demo">
        <a href="{{ url('/dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-2">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->is('dashboard*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboard</div>
            </a>
        </li>

        <!-- Pages -->
        <li class="menu-item {{ request()->is('profile*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="Profile">Profile</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Profile">Profile</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">User Management</span>
        </li>
        
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="Cards">Cards</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Buttons">Buttons</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Forms">Forms</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Tables">Tables</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Forms & Tables</span>
        </li>
        
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div class="text-truncate" data-i18n="Tables">Tables</div>
            </a>
        </li>

        <!-- Support -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Support</span>
        </li>
        
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free/issues" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate" data-i18n="Support">Support</div>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate" data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
