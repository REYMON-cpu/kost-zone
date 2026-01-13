<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KOST ZONE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark kost-navbar">
    <div class="container">
        <span class="navbar-brand fw-bold">KOST ZONE</span>

        <div>
            @auth
                <a href="/owner/dashboard" class="btn btn-light btn-sm">Dashboard</a>
                <form action="/logout" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            @else
                <a href="/login" class="btn btn-light btn-sm">Login</a>
            @endauth
        </div>
    </div>
</nav>

<div class="container my-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
