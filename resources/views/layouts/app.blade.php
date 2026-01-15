<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KOST ZONE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pdf-style.css') }}">
</head>
<body>

<header class="kost-header">
    <h1>KOST ZONE</h1>
    <p>Tempat terbaik mencari Kost</p>

    <nav>
        <a href="/">HOME</a>
        <a href="/">KOSTAN</a>
        <a href="/ketentuan">KETENTUAN</a>
    </nav>
</header>

<div class="container my-4">
    @yield('content')
</div>

<footer class="kost-footer">
    <p>PROJECT BY</p>
    <strong>AHMAD ZAKKY NURFAUZAN & MUHAMMAD REYHAN</strong>
    <p>MADE WITH LOVE</p>
</footer>

</body>
</html>
