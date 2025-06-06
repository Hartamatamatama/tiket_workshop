<!-- resources/views/layouts/user.blade.php -->
<!DOCTYPE html>
<html lang="id">
@include('structure.header')
<body class="gradient-bg min-h-screen text-gray-100 font-sans w-screen">
    @include('components.navbar')
    @include('components.toast')
    @yield('content')
    @include('components.footer')
    @stack('scripts')
</body>
</html>
