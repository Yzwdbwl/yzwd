<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="/dashboard">My Dashboard</a>
        <a class="navbar-brand" href="/">Home Page</a>
        <ul class="ml-auto d-flex list-unstyled">
            @yield('navbar')
        </ul>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>