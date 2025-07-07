<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Haftap - Joki Game Professional</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Background gradient animation */
    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    body {
      background: linear-gradient(270deg, #6a11cb, #2575fc, #6a11cb, #2575fc);
      background-size: 800% 800%;
      animation: gradientBG 15s ease infinite;
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .hero {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 5rem 1rem;
      animation: fadeInUp 1.5s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero h1 {
      font-weight: 900;
      font-size: 3.5rem;
      margin-bottom: 1rem;
      text-shadow: 0 3px 6px rgba(0,0,0,0.4);
    }

    .hero p {
      font-size: 1.5rem;
      margin-bottom: 2.5rem;
      text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }

    .btn-primary {
      background-color: #512da8;
      border-color: #512da8;
      font-weight: 600;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      transition: background-color 0.3s ease, transform 0.3s ease;
      box-shadow: 0 4px 15px rgba(81, 45, 168, 0.4);
    }

    .btn-primary:hover {
      background-color: #311b92;
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(49, 27, 146, 0.6);
    }

    #about {
      background: rgba(255, 255, 255, 0.95);
      color: #333;
      padding: 4rem 2rem;
      border-radius: 12px;
      max-width: 900px;
      margin: 3rem auto 5rem;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      animation: fadeInUp 2s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    #about h2 {
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: #512da8;
    }

    #about p {
      font-size: 1.15rem;
      line-height: 1.7;
    }

    /* Game cards */
    .game-card {
      background: white;
      border-radius: 12px;
      padding: 1.5rem;
      margin: 1rem 0;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .game-card:hover {
      transform: translateY(-5px);
    }

    .game-card img {
      height: 60px;
      margin-bottom: 1rem;
    }

    .game-card h5 {
      color: #512da8;
      font-weight: 600;
    }

    /* Info card styles */
    .info-card {
      display: flex;
      align-items: center;
      margin-top: 1.5rem;
    }

    .info-card svg {
      width: 40px;
      height: 40px;
      fill: #512da8;
      margin-right: 1rem;
      flex-shrink: 0;
    }

    footer {
      background-color: #311b92;
      color: #ddd;
      padding: 1rem 0;
      text-align: center;
      font-size: 0.95rem;
      font-weight: 500;
      box-shadow: 0 -3px 10px rgba(0,0,0,0.3);
    }

    /* Responsive font sizes */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      .hero p {
        font-size: 1.2rem;
      }
    }

    .game-img {
      max-width: 100px;
      max-height: 60px;
      object-fit: contain;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>
<body>
  <section class="hero container">
    <div>
      <h1>Welcome to <span style="color:#1de9b6">Haftap</span></h1>
      <p><strong>Joki Game Professional & Terpercaya</strong></p>
      <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Mulai Sekarang</a>
    </div>
  </section>
  
  <section id="about">
    <h2>Tentang Haftap</h2>
    <p>
      Haftap adalah platform joki game professional yang menyediakan layanan joki untuk berbagai game populer. 
      Kami memiliki tim joki berpengalaman yang siap membantu Anda mencapai target rank atau level yang diinginkan.
    </p>

    <div class="row mt-4">
      <div class="col-md-6 col-lg-3">
        <div class="game-card text-center">
          <img src="/img/mobile-legends.png" alt="Mobile Legends">
          <h5>Mobile Legends</h5>
          <p class="text-muted">Joki Rank ML dari Bronze hingga Mythic</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="game-card text-center">
          <img src="/img/pubg.png" alt="PUBG">
          <h5>PUBG Mobile</h5>
          <p class="text-muted">Joki PUBG untuk mencapai tier tinggi</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="game-card text-center">
          <img src="/img/free-fire.png" alt="Free Fire" style="max-width: 100px; max-height: 60px; object-fit: contain;">
          <h5>Free Fire</h5>
          <p class="text-muted">Joki FF untuk rank Heroic dan Grandmaster</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="game-card text-center">
          <img src="/img/valorant.png" alt="Valorant">
          <h5>Valorant</h5>
          <p class="text-muted">Joki Valorant untuk rank competitive</p>
        </div>
      </div>
    </div>

    <div class="info-card">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 12c2.209 0 4-1.791 4-4S14.209 4 12 4 8 5.791 8 8s1.791 4 4 4zm0 2c-2.67 0-8 1.337-8 4v2h16v-2c0-2.663-5.33-4-8-4z"/></svg>
      <div>
        <h5>Keunggulan Kami</h5>
        <p>Tim joki professional, aman dan terpercaya, harga terjangkau, dan garansi 100%</p>
      </div>
    </div>

    <div class="info-card">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21 3H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 16H4v-2h16v2zm0-4H4v-2h16v2zm0-4H4V7h16v2z"/></svg>
      <div>
        <h5>Layanan 24/7</h5>
        <p>Customer service siap melayani Anda setiap saat</p>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 Haftap - Joki Game Professional — All Rights Reserved
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
