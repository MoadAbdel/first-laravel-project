<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Mon site Laravel</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 - Tous droits réservés</p>
    </footer>
</body>
</html>