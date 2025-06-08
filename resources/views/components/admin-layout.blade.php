<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Dashboard Admin' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            position: fixed;
            background-color: #343a40;
            padding: 20px 0;
        }

        .sidebar a {
            color: white;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
            transition: background 0.2s;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 220px;
            padding: 40px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <h4 class="text-white text-center py-4 border-bottom border-light ">Admin Panel</h4>
        <a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-2"></i>Home</a>
        <a href="{{ route('admin.beasiswa') }}"><i class="bi bi-journal-text me-2"></i>Kelola Beasiswa</a>
        <a href="{{ route('admin.pekerjaan') }}"><i class="bi bi-briefcase-fill me-2"></i>Kelola Pekerjaan</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn text-start text-white w-100 px-3 py-2 border-0 bg-transparent">
                <i class="bi bi-box-arrow-right me-2"></i>Logout
            </button>
        </form>


    </div>

    <!-- Main Content -->
    <div class="content">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
