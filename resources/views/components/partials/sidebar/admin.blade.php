<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span class="text-primary">
                    <!-- SVG Logo -->
                    <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- SVG content remains the same -->
                    </svg>
                </span>
            </span>
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
        <li class="menu-item">
            <a href="dashboard.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboard</div>
            </a>
        </li>

        <!-- User Management-->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="User">User Management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate">Warehouse Manager</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Analytics">Warehouse Staff</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside>

<script>
    const menuLinks = document.querySelectorAll('.menu-item > a');

    // Restore active from localStorage
    document.addEventListener('DOMContentLoaded', () => {
        const activeUrl = localStorage.getItem('activeMenu');
        if (activeUrl) {
            // remove all active/open
            document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active', 'open'));

            // find matching link
            const activeLink = document.querySelector(`.menu-item > a[href="${activeUrl}"]`);
            if (activeLink) {
                const parentItem = activeLink.closest('.menu-item');
                parentItem.classList.add('active');

                // if it's inside a submenu, open parent menu too
                const parentMenu = parentItem.closest('.menu-item');
                if (parentMenu && parentMenu.querySelector('.menu-toggle')) {
                    parentMenu.classList.add('active', 'open');
                }
            }
        }
    });

    // Save active on click
    menuLinks.forEach(link => {
        link.addEventListener('click', function () {
            const href = this.getAttribute('href');
            if (href && href !== "javascript:void(0);") {
                localStorage.setItem('activeMenu', href);
            }
        });
    });
</script>
