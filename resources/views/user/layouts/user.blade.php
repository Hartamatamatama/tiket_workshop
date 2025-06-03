<!-- resources/views/layouts/user.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>User Panel - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
        <a class="navbar-brand" href="{{ route('events.index') }}">EventKu</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}">Tiket Saya</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
