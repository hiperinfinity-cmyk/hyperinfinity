<?php
$page_title = "Hyper Infinity - Misión y Visión";
$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="IMG/logo.jpeg">
  <style>
    :root {
      --color-primary: #000000;
      --color-secondary: #ffffff;
      --color-accent:  #e4c33eff;
      --color-darkblue: #0a0f2c;
      --font-family: 'Poppins', sans-serif;
      --border-radius: 1.5rem;
      --transition: all 0.3s ease;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: var(--font-family);
      line-height: 1.8;
      background: #ffffff;
      color: #1f2a47ff;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
      position: relative;
      z-index: 2;
    }

    h2 {
      font-size: 2rem;
      text-align: center;
      margin-bottom: 1rem;
      color: var(--color-accent);
    }
    p {
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      color: var(--color-secondary);
    }
    .highlight { color: var(--color-accent); }

    /* HEADER */
    .header {
      background: var(--color-secondary);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 90px;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 1rem;
      font-size: 2rem;
      font-weight: 800;
      color: var(--color-primary);
    }
    .logo-img {
      max-height: 70px;
      width: auto;
      object-fit: contain;
    }
    .nav-desktop { display: none; }
    .nav-link {
      margin: 0 1rem;
      font-weight: 600;
      font-size: 1.2rem;
      color: #495057;
      transition: var(--transition);
    }
    .nav-link:hover, .nav-link.active { color: var(--color-accent); }

    .menu-toggle {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 22px;
      background: transparent;
      border: none;
      cursor: pointer;
    }
    .bar { width: 100%; height: 3px; background: var(--color-primary); transition: var(--transition); }
    .mobile-menu { display: none; padding: 1rem 0; border-top: 1px solid #dee2e6; }
    .mobile-menu.active { display: block; }
    .nav-mobile { display: flex; flex-direction: column; }
    .nav-mobile .nav-link { padding: 0.75rem 0; }
    .mobile-btn { margin-top: 1rem; }

    /* SECCIONES COMO RECTÁNGULOS */
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 4rem 1rem;
    }
    .section-box {
      position: relative;
      z-index: 2;
      border-radius: var(--border-radius);
      padding: 2.5rem;
      text-align: center;
      background: var(--color-darkblue);
      width: 80%;
      max-width: 800px;
      min-height: 250px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }
    .section-box canvas {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      z-index: 1;
    }
    .section-content {
      position: relative;
      z-index: 2;
    }

    /* ESLOGAN */
    .slogan img {
      height: 100px;
      width: auto;
      margin-bottom: 1rem;
    }
    .slogan h2 {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--color-secondary);
    }

    /* FOOTER */
    .footer {
      background: var(--color-darkblue);
      color: #adb5bd;
      padding: 2rem 0;
      text-align: center;
      font-size: 1rem;
      border-radius: var(--border-radius) var(--border-radius) 0 0;
      margin-top: 2rem;
    }

    @media (min-width: 992px) {
      .nav-desktop { display: flex; }
      .menu-toggle { display: none; }
    }
  </style>
</head>
<body>
  <!-- HEADER -->
  <header class="header">
    <div class="container">
      <div class="navbar">
        <a href="index.php" class="logo">
          <img src="IMG/logo.png" alt="Logo Hyper Infinity" class="logo-img">
          <span>Hyper<span class="highlight">Infinity</span></span>
        </a>
        <nav class="nav-desktop">  
          <a href="index.php" class="nav-link active">Inicio</a>
          <a href="proyectos.php" class="nav-link">Proyectos</a>
          <a href="mision-vision.php" class="nav-link">Misión y Visión</a>
          <a href="innovacion.php" class="nav-link">Innovacion</a>
        </nav>
        <a href="cotizacion.php" class="btn btn-primary desktop-only">Contactanos</a>
        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú">
          <span class="bar"></span><span class="bar"></span><span class="bar"></span>
        </button>
      </div>
      <div class="mobile-menu" id="mobileMenu" aria-hidden="true">
        <nav class="nav-mobile">
          <a href="index.php" class="nav-link">Inicio</a>
          <a href="proyectos.php" class="nav-link">Proyectos</a>
          <a href="mision-vision.php" class="nav-link">Misión y Visión</a>
          <a href="innovacion.php" class="nav-link">Innovacion</a>
          <a href="cotizacion.php" class="btn btn-primary mobile-btn">Contactanos</a>
        </nav>
      </div>
    </div>
  </header>

  <!-- ESLOGAN -->
  <section class="slogan">
    <div class="section-box">
      <canvas></canvas>
      <div class="section-content">
        <img src="IMG/logo.png" alt="Logo Hyper Infinity">
        <h2>"Impulsamos tu marca hacia la <span class='highlight'>infinidad digital</span>"</h2>
      </div>
    </div>
  </section>

  <!-- MISIÓN -->
  <section class="mision">
    <div class="section-box">
      <canvas></canvas>
      <div class="section-content">
        <h2>Nuestra <span class="highlight">Misión</span></h2>
        <p>En <strong>Hyper Infinity</strong> nuestra misión es diseñar y desarrollar páginas web modernas, creativas y funcionales que impulsen la presencia digital de nuestros clientes. Trabajamos con pasión para ofrecer soluciones innovadoras que se adapten a las necesidades de cada negocio, generando valor y confianza a través de la tecnología.</p>
      </div>
    </div>
  </section>

  <!-- VISIÓN -->
  <section class="vision">
    <div class="section-box">
      <canvas></canvas>
      <div class="section-content">
        <h2>Nuestra <span class="highlight">Visión</span></h2>
        <p>Nuestra visión es convertirnos en una empresa líder en el desarrollo web a nivel nacional e internacional, reconocida por la calidad, creatividad e innovación de nuestros proyectos. Aspiramos a ser el aliado estratégico de las empresas que buscan crecer en el mundo digital, contribuyendo a su transformación tecnológica y al éxito de sus objetivos.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <p>&copy; <?php echo $current_year; ?> Hyper Infinity. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script>
    // Punticos animados dentro de cada rectángulo
    document.querySelectorAll(".section-box").forEach(box => {
      const canvas = box.querySelector("canvas");
      if (!canvas) return;
      const ctx = canvas.getContext("2d");
      let particles = [];

      function resizeCanvas() {
        canvas.width = box.clientWidth;
        canvas.height = box.clientHeight;
      }
      window.addEventListener("resize", resizeCanvas);
      resizeCanvas();

      function createParticles() {
        particles = [];
        for (let i = 0; i < 50; i++) {
          particles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            r: Math.random() * 2 + 1,
            dx: (Math.random() - 0.5) * 0.5,
            dy: (Math.random() - 0.5) * 0.5
          });
        }
      }

      function drawParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "#fff";
        particles.forEach(p => {
          ctx.beginPath();
          ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
          ctx.fill();

          p.x += p.dx;
          p.y += p.dy;

          if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
          if (p.y < 0 || p.y > canvas.height) p.dy *= -1;
        });
        requestAnimationFrame(drawParticles);
      }

      createParticles();
      drawParticles();
    });

    // Menú hamburguesa
    document.getElementById('menuToggle').addEventListener('click', function() {
      document.getElementById('mobileMenu').classList.toggle('active');
      const bars = document.querySelectorAll('.bar');
      if  (document.getElementById('mobileMenu').classList.contains('active')) {
          bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
          bars[1].style.opacity = '0';
          bars[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
      } else {
          bars[0].style.transform = 'rotate(0) translate(0)';
          bars[1].style.opacity = '1';
          bars[2].style.transform = 'rotate(0) translate(0)';
      }
    });
  </script>
</body>
</html>
