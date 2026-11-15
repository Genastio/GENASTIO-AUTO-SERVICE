<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENASTIO AUTO SERVICE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    background: linear-gradient(135deg, #dceaff, #edf4ff, #c9ddf7);
    min-height: 100vh;
        }

        .navbar-custom {
            background-color: #173b70;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-custom .nav-link:hover {
            color: #b9d8ff;
        }

        .card {
            border-radius: 12px;
        }

        .table {
            border: 1px solid #9aafc9;
        }

        .table th,
        .table td {
            border: 1px solid #9aafc9 !important;
            padding: 12px;
            vertical-align: middle;
        }

        .table thead th {
            background-color: #d5e7ff;
            color: #173b70;
        }

        footer {
            background-color: #173b70;
            color: white;
            padding: 18px;
            text-align: center;
            margin-top: 40px;
        }
        .card {
    border-radius: 16px;
    background-color: #f8fbff;
    border: 1px solid #c5d9f2;
}

footer {
    background: linear-gradient(90deg, #173b70, #2878d0);
    color: white;
    padding: 18px;
    text-align: center;
    margin-top: 40px;
}

body {
    background: linear-gradient(
        135deg,
        #a8ccf0 0%,
        #c5ddfa 50%,
        #8fb9e8 100%
    ) !important;
    background-attachment: fixed !important;
}
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">
    🔧 GENASTIO AUTO SERVICE
</a>

        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer>
        © 2026 GENASTIO AUTO SERVICE |
        Genastio Shidqi Dhiaurahman - 2457401018
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>