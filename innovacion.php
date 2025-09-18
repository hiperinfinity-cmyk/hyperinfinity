<?php
$page_title = "Hyper Infinity - Nuestros Valores e Innovación";
$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      margin: 0; padding: 0; 
      background: #0f172a; 
      color: #fff; 
    }
    header, footer { padding: 1rem; }

    /* Header */
    header { 
      background: #1e293b; 
      display: flex; 
      justify-content: center; 
      align-items: center; 
    }
    header .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
    }
    header .logo img { height: 60px; }
    header .logo span {
      font-size: 1.8rem;
      font-weight: 800;
      font-family: Arial, Helvetica, sans-serif;
    }
    header .logo .hyper { color: #e4c33e; }
    header .logo .infinity { color: #fff; }

    /* Hero */
    .hero { 
      position: relative;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 2rem;
      padding: 5rem 2rem;
      text-align: center;
      color: #fff;
      background: linear-gradient(270deg, #1f2a47, #3b4a77, #1f2a47);
      background-size: 600% 600%;
      animation: gradientBG 15s ease infinite;
      overflow: hidden;
    }
    /* Canvas de partículas */
    #particles {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      pointer-events: none;
      z-index: 1;
    }
    .hero-content, .hero-img {
      position: relative;
      z-index: 2;
    }
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .hero-content {
      flex: 1 1 400px;
      animation: fadeInUp 1.5s ease forwards;
      opacity: 0;
    }
    .hero h1 { font-size: 3rem; margin-bottom: 1rem; color: #e4c33e; }
    .hero p { font-size: 1.2rem; margin-bottom: 2rem; }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .btn-hero {
      display: inline-block;
      background: #e4c33e;
      color: #1f2a47;
      padding: 1rem 2.5rem;
      border-radius: 50px;
      font-weight: bold;
      text-decoration: none;
      position: relative;
      overflow: hidden;
      transition: transform 0.3s;
    }
    .btn-hero::after {
      content: "";
      position: absolute;
      top: 0; left: -100%;
      width: 100%; height: 100%;
      background: rgba(255,255,255,0.4);
      transition: left 0.5s;
    }
    .btn-hero:hover { transform: scale(1.05); }
    .btn-hero:hover::after { left: 100%; }
    .hero-img img {
      max-width: 320px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
      animation: float 4s ease-in-out infinite;
      opacity: 0;
      animation: fadeInUp 2s ease forwards, float 4s ease-in-out infinite 2s;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    /* Secciones */
    .values, .innovation, .impact, .cta {
      max-width: 1100px; 
      margin: auto; 
      padding: 3rem 2rem; 
      background: #1f2a47; 
      border-radius: 16px; 
      margin-top: 2rem;
    }
    .values h2, .innovation h2 {
      text-align: center; 
      margin-bottom: 2rem; 
      color: #e4c33e; 
    }
    .cards { 
      display: grid; 
      grid-template-columns: repeat(auto-fit,minmax(250px,1fr)); 
      gap: 1.5rem; 
    }
    .card { 
      background: #0f172a; 
      padding: 2rem; 
      border-radius: 12px; 
      box-shadow: 0 4px 8px rgba(0,0,0,0.2); 
      text-align: center; 
      transition: transform 0.3s, box-shadow 0.3s;
      opacity: 0;
      transform: translateY(40px);
    }
    .card h3 { margin-bottom: 0.5rem; color: #e4c33e; }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0,0,0,0.4);
    }

    /* Innovación */
    .innovation-content { 
      display: flex; 
      flex-wrap: wrap; 
      align-items: center; 
      gap: 2rem; 
    }
    .innovation-content img { 
      max-width: 400px; 
      border-radius: 12px; 
      box-shadow: 0 4px 8px rgba(0,0,0,0.4);
      opacity: 0;
      transform: translateX(40px);
    }
    .innovation-content p { 
      flex: 1; 
      font-size: 1.1rem; 
      line-height: 1.6;
      opacity: 0;
      transform: translateX(-40px);
    }

    /* Impacto */
    .impact { 
      background: #e4c33e; 
      color: #1f2a47; 
      text-align: center; 
      font-size: 1.3rem; 
      font-weight: bold;
      opacity: 0;
    }

    /* CTA */
    .cta { text-align: center; }
    .cta a { 
      background: #e4c33e; 
      color: #1f2a47; 
      padding: 1rem 2rem; 
      border-radius: 8px; 
      text-decoration: none; 
      font-weight: bold; 
      transition: 0.3s; 
      animation: pulse 2s infinite;
    }
    .cta a:hover { background: #fff; color: #1f2a47; }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    /* Footer */
    footer { 
      background: #0f172a; 
      color: #fff; 
      text-align: center; 
      padding: 1.5rem; 
      font-size: 0.9rem; 
    }
    footer a { color: #e4c33e; text-decoration: none; margin: 0 0.5rem; }
    footer a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <header>
    <a href="index.php" class="logo">
      <img src="IMG/logo.png" alt="Logo Hyper Infinity - Innovación tecnológica">
      <span><span class="hyper">Hyper</span><span class="infinity">Infinity</span></span>
    </a>
  </header>

  <!-- Hero -->
  <section class="hero">
    <canvas id="particles"></canvas>
    <div class="hero-content">
      <h1>Innovamos para transformar tu futuro digital</h1>
      <p>En Hyper Infinity creemos que la innovación no es una opción, es nuestra esencia.</p>
      <a href="servicios.php" class="btn-hero">Descubre nuestros servicios</a>
    </div>
    <div class="hero-img">
      <img src="IMG/inno1.webp" alt="Equipo innovando en desarrollo de software">
    </div>
  </section>

  <!-- Valores -->
  <section class="values">
    <h2>Nuestros Valores</h2>
    <div class="cards">
      <div class="card"><h3>💡 Creatividad</h3><p>Diseñamos soluciones únicas que hacen destacar a cada cliente.</p></div>
      <div class="card"><h3>✅ Calidad</h3><p>Software seguro, escalable y optimizado para crecer contigo.</p></div>
      <div class="card"><h3>🤝 Compromiso</h3><p>Nos involucramos en cada proyecto como si fuera propio.</p></div>
      <div class="card"><h3>🚀 Innovación</h3><p>Adoptamos las últimas tecnologías para mantenernos a la vanguardia.</p></div>
    </div>
  </section>

  <!-- Innovación -->
  <section class="innovation">
    <h2>¿Por qué somos innovadores?</h2>
    <div class="innovation-content">
      <p>En Hyper Infinity desarrollamos software que evoluciona con tu negocio. Implementamos 
      inteligencia artificial, cloud computing y metodologías ágiles para asegurar soluciones rápidas, 
      eficientes y personalizadas. Nuestro enfoque en la experiencia de usuario nos permite crear 
      plataformas atractivas, intuitivas y modernas.</p>
      <img src="IMG/inno2.jpeg" alt="Innovación tecnológica en equipo">
    </div>
  </section>

  <!-- Impacto -->
  <section class="impact">
    “La innovación es el motor que impulsa nuestro crecimiento y el de nuestros clientes.”
  </section>

  <!-- CTA -->
  <section class="cta">
    <a href="contacto.php">Conoce cómo podemos innovar tu negocio</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo $current_year; ?> Hyper Infinity. Todos los derechos reservados.</p>
  </footer>

  <!-- JS Animaciones scroll -->
  <script>
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0) translateX(0)';
          entry.target.style.transition = 'all 1s ease';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.card, .innovation-content p, .innovation-content img, .impact')
      .forEach(el => observer.observe(el));

    /* Partículas en Hero */
    const canvas = document.getElementById('particles');
    const ctx = canvas.getContext('2d');
    let particlesArray;

    function initParticles() {
      canvas.width = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
      particlesArray = [];
      for (let i = 0; i < 60; i++) {
        particlesArray.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height,
          size: Math.random() * 3 + 1,
          speedX: (Math.random() - 0.5) * 1,
          speedY: (Math.random() - 0.5) * 1
        });
      }
    }

    function animateParticles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.fillStyle = "rgba(255, 255, 255, 0.7)";
      particlesArray.forEach(p => {
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
        ctx.fill();
        p.x += p.speedX;
        p.y += p.speedY;

        if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
        if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
      });
      requestAnimationFrame(animateParticles);
    }

    window.addEventListener("resize", initParticles);
    initParticles();
    animateParticles();
  </script> 
</body>
</html>
