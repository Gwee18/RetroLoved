<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RetroLoved')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand { font-weight: bold; }
        .footer { background-color: #f8f9fa; margin-top: 50px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">🏪 RetroLoved</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">🏠 Home</a>
                <a class="nav-link" href="/products">🛍️ Products</a>
                <a class="nav-link" href="/login">🔐 Login</a>
                <a class="nav-link" href="/register">📝 Register</a>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="footer py-3 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 RetroLoved. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>