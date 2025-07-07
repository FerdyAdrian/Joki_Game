<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Haftap - Joki Game Professional</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #0f2027 0%, #2c5364 100%);
      background-size: 200% 200%;
      animation: gradientMove 10s ease-in-out infinite;
      color: #fff;
      min-height: 100vh;
      font-family: 'Poppins', Arial, sans-serif;
    }
    @keyframes gradientMove {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    .hero {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 5rem 1rem 2rem 1rem;
      animation: fadeInUp 1.2s cubic-bezier(.39,.575,.565,1) both;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px);}
      to { opacity: 1; transform: translateY(0);}
    }
    .hero h1 {
      font-family: 'Orbitron', Arial, sans-serif;
      font-weight: 900;
      font-size: 3.2rem;
      margin-bottom: 1.2rem;
      color: #1de9b6;
      text-shadow: 0 0 16px #1de9b6, 0 2px 8px #0a2342;
      letter-spacing: 2px;
    }
    .hero .subtitle {
      font-size: 1.5rem;
      color: #fff;
      margin-bottom: 2.5rem;
      text-shadow: 0 2px 8px #0a2342;
    }
    .btn-primary {
      background: linear-gradient(90deg, #1de9b6 0%, #0a2342 100%);
      border: none;
      border-radius: 12px;
      font-weight: 700;
      font-size: 1.2rem;
      padding: 0.8rem 2.5rem;
      color: #fff;
      box-shadow: 0 4px 20px #1de9b633;
      transition: 0.2s;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #0a2342 0%, #1de9b6 100%);
      color: #fff;
      transform: scale(1.07);
      box-shadow: 0 8px 32px #1de9b655;
    }
    .card-game {
      background: rgba(255,255,255,0.13);
      border-radius: 18px;
      box-shadow: 0 8px 32px 0 rgba(31,38,135,0.25);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.18);
      padding: 32px 24px;
      margin-bottom: 24px;
      animation: fadeInUp 1.5s cubic-bezier(.39,.575,.565,1) both;
    }
    .game-card {
      background: rgba(255,255,255,0.18);
      border-radius: 12px;
      padding: 1.5rem;
      margin: 1rem 0.5rem;
      box-shadow: 0 4px 15px #1de9b622;
      transition: transform 0.3s, box-shadow 0.3s;
      display: inline-block;
      min-width: 180px;
      max-width: 220px;
      vertical-align: top;
    }
    .game-card:hover {
      transform: translateY(-8px) scale(1.04);
      box-shadow: 0 8px 32px #1de9b655;
    }
    .game-card img {
      height: 60px;
      margin-bottom: 1rem;
    }
    .game-card h5 {
      color: #1de9b6;
      font-family: 'Orbitron', Arial, sans-serif;
      font-weight: 700;
    }
    footer {
      background-color: #0a2342;
      color: #1de9b6;
      padding: 1rem 0;
      text-align: center;
      font-size: 1rem;
      font-weight: 600;
      letter-spacing: 1px;
      box-shadow: 0 -3px 10px #0a234288;
    }
  </style>
</head>
<body>
  <section class="hero container">
    <div>
      <h1>🎮 Haftap Game Service</h1>
      <div class="subtitle">Joki Game Professional & Terpercaya</div>
      <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Mulai Sekarang</a>
    </div>
  </section>
  
  <section>
    <div class="card-game mx-auto" style="max-width: 900px;">
      <h2 class="mb-4 text-center" style="font-family:'Orbitron',Arial,sans-serif;color:#1de9b6;">Tentang Haftap</h2>
      <p class="text-center mb-4" style="color:#fff;">Haftap adalah platform joki game professional yang menyediakan layanan joki untuk berbagai game populer. Kami memiliki tim joki berpengalaman yang siap membantu Anda mencapai target rank atau level yang diinginkan.</p>
      <div class="d-flex flex-wrap justify-content-center">
        <div class="game-card text-center m-2">
          <img src="/img/mobile-legends.png" alt="Mobile Legends">
          <h5>Mobile Legends</h5>
          <p class="text-muted">Joki Rank ML dari Bronze hingga Mythic</p>
        </div>
        <div class="game-card text-center m-2">
          <img src="/img/pubg.png" alt="PUBG">
          <h5>PUBG Mobile</h5>
          <p class="text-muted">Joki PUBG untuk mencapai tier tinggi</p>
        </div>
        <div class="game-card text-center m-2">
          <img src="/img/free-fire.png" alt="Free Fire">
          <h5>Free Fire</h5>
          <p class="text-muted">Joki FF untuk rank Heroic dan Grandmaster</p>
        </div>
        <div class="game-card text-center m-2">
          <img src="/img/valorant.png" alt="Valorant">
          <h5>Valorant</h5>
          <p class="text-muted">Joki Valorant untuk rank competitive</p>
        </div>
      </div>
      <div class="mt-4 text-center" style="color:#1de9b6;">
        <b>⚡ Keunggulan Kami:</b> Tim joki profesional, aman dan terpercaya, harga terjangkau, garansi 100%<br>
        <b>🕹️ Layanan 24/7:</b> Customer service siap melayani Anda setiap saat
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 Haftap - Joki Game Professional — All Rights Reserved
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
