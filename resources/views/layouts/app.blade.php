<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haftap | Joki Game Haftap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f2027 0%, #2c5364 100%);
            font-family: 'Poppins', Arial, sans-serif;
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
        .centered-auth {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('/img/free-fire.png') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        .centered-auth::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(15,32,39,0.7);
            z-index: 0;
        }
        .card-auth {
            position: relative;
            z-index: 1;
            background: rgba(255,255,255,0.15);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.18);
            padding: 40px 32px;
            max-width: 400px;
            width: 100%;
        }
        .card-auth h2 {
            font-family: 'Orbitron', Arial, sans-serif;
            color: #1de9b6;
            text-align: center;
            margin-bottom: 24px;
            letter-spacing: 2px;
            font-size: 2rem;
        }
        .form-control {
            border-radius: 10px;
            border: 1.5px solid #1de9b6;
        }
        .btn-primary {
            background: linear-gradient(90deg, #1de9b6 0%, #0a2342 100%);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.2s;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #0a2342 0%, #1de9b6 100%);
            color: #fff;
            transform: scale(1.05);
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
    @if (Request::is('login') || Request::is('register') || Request::is('password/*'))
        <div class="centered-auth">
            @yield('content')
        </div>
    @else
        <div class="content">
            @yield('content')
        </div>
    @endif
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
