<!doctype html>
<html lang="en" class="layout-menu-fixed layout-compact"
      data-assets-path="{{ asset('assets') }}/"
      data-template="vertical-menu-template-free">

    {{-- Head Section --}}
    @include('components.layouts.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            {{-- Sidebar --}}
            @auth
                @if(Auth::user()->role === 'admin')
                    @include('components.partials.sidebar.admin')
                @elseif(Auth::user()->role === 'manager')
                    @include('components.partials.sidebar.manager')
                @elseif(Auth::user()->role === 'staff')
                    @include('components.partials.sidebar.staff')
                @else
                    @include('components.partials.sidebar.finance')
                @endif
            @endauth

            <!-- Layout container -->
            <div class="layout-page">

                {{-- Navbar --}}
                @include('components.layouts.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    {{-- Footer --}}
                    @include('components.layouts.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content wrapper -->

            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    {{-- Extra scripts from child views --}}
    @stack('scripts')
</body>
</html>
