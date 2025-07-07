<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haftap | Joki Game Haftap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e6f0fa;
        }
        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #0a2342 60%, #1de9b6 100%);
            color: #fff;
            padding-top: 30px;
            transition: all 0.3s;
            z-index: 1000;
        }
        .sidebar .nav-link {
            color: #fff !important;
            font-weight: 600;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #1de9b6;
            color: #0a2342 !important;
        }
        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar .logo img {
            height: 50px;
        }
        .content {
            margin-left: 220px;
            padding: 30px 20px;
            min-height: 100vh;
        }
        @media (max-width: 768px) {
            .sidebar {
                left: -220px;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                margin-left: 0;
                padding: 20px 5px;
            }
            .sidebar-toggle {
                display: block;
            }
        }
        .sidebar-toggle {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1100;
            background: #1de9b6;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            color: #0a2342;
            font-size: 22px;
        }
    </style>
</head>
<body>
    @auth
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="/img/LOGO HAFTAP.jpg" alt="Haftap Logo">
            <h4 class="mt-2" style="color:#1de9b6;">Haftap</h4>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Dashboard</a>
            <a class="nav-link {{ request()->is('pesanan') ? 'active' : '' }}" href="/pesanan">Pesanan Saya</a>
            <a class="nav-link {{ request()->is('pesanan-tersedia') ? 'active' : '' }}" href="/pesanan-tersedia">Pesanan Tersedia</a>
            <a class="nav-link {{ request()->is('usecase-jokigame') ? 'active' : '' }}" href="/usecase-jokigame">Use Case</a>
            <a class="nav-link {{ request()->is('profil') ? 'active' : '' }}" href="/profil">Akun</a>
            <form action="{{ route('logout') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-outline-light w-100">Logout</button>
            </form>
        </nav>
    </div>
    @endauth
    <div class="content">
        @yield('content')
    </div>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
