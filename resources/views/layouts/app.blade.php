<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- Navbar (same for all roles, or make it conditional too) --}}
    @include('partials.navbar')

    <div class="flex">
        {{-- Sidebar changes by role --}}
        @includeWhen(auth()->user()->hasRole('super-admin'), 'partials.sidebar-superadmin')
        @includeWhen(auth()->user()->hasRole('admin'), 'partials.sidebar-admin')
        @includeWhen(auth()->user()->hasRole('staff'), 'partials.sidebar-staff')

        <main class="p-4 w-full">
            @yield('content')
        </main>
    </div>
</body>
</html>
