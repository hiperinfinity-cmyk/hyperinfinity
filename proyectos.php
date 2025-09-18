<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papelería Almendra - Portafolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Icono del navegador -->
  <link rel="icon" type="image/png" href="IMG/logo.jpeg">
  <style>
        :root {
            --color-primary: #2c3e50;
            --color-secondary: #ffffff;
            --color-accent:  #e4c33eff; 
            --color-light: #f8f9fa;
            --color-dark: #1a252f;
            --font-family: 'Poppins', sans-serif;
            --border-radius: 0.5rem;
            --transition: all 0.3s ease;
            --box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: var(--font-family);
            line-height: 1.8;
            color: #212529;
            background: var(--color-secondary);
        }

        img { max-width: 100%; height: auto; }
        a { text-decoration: none; color: inherit; }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        h1, h2, h3 {
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1rem;
            letter-spacing: -1px;
        }
        h1 { font-size: 3rem; }
        h2 { font-size: 2.5rem; }
        h3 { font-size: 1.75rem; }
        p { font-size: 1.2rem; font-weight: 500; }

        .highlight { color: var(--color-accent); }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 700;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 1.1rem;
        }
        .btn-primary { background: var(--color-primary); color: var(--color-secondary); }
        .btn-primary:hover { background: #34495e; }
        .btn-highlight { background: var(--color-accent); color: var(--color-primary); }
        .btn-highlight:hover { background: #e6d97f; }
        .btn-outline { border: 2px solid var(--color-accent); color: var(--color-secondary); background: none; }
        .btn-outline:hover { background: var(--color-accent); color: var(--color-primary); }

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
            height: 70px;
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

        .desktop-only { display: none; }

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

        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1534452203293-494d7ddbf7e0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: var(--color-secondary);
            padding: 6rem 0;
            text-align: center;
        }
        .hero h1 { font-size: 3.5rem; margin-bottom: 1.5rem; }
        .hero p { font-size: 1.4rem; margin-bottom: 2rem; }
        .hero-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-width: 500px;
            margin: 0 auto;
        }

        .project {
            padding: 6rem 0;
            background: var(--color-light);
        }
        .project h2 {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--color-primary);
        }
        .project-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            background: var(--color-secondary);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }
        .project-images {
            display: flex;
            flex-direction: column;
        }
        .project-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .project-details {
            padding: 2rem;
        }
        .project-details h3 {
            color: var(--color-primary);
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }
        .project-details p {
            margin-bottom: 1.5rem;
            color: #495057;
        }
        .project-features {
            margin: 2rem 0;
        }
        .feature-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--color-light);
            border-radius: var(--border-radius);
        }
        .feature-icon {
            font-size: 1.5rem;
            color: var(--color-accent);
        }

        .cta {
            padding: 5rem 0;
            background: var(--color-primary);
            color: var(--color-secondary);
            text-align: center;
        }
        .cta h2 { font-size: 2.8rem; margin-bottom: 1rem; }
        .cta p { font-size: 1.3rem; margin-bottom: 2rem; }

        .footer {
            background: var(--color-dark);
            color: #adb5bd;
            padding: 3rem 0;
            text-align: center;
            font-size: 1rem;
        }
        .footer-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        @media (min-width: 768px) {
            .project-content { flex-direction: row; }
            .project-images { flex-direction: row; width: 50%; }
            .project-img { width: 50%; height: auto; }
            .project-details { width: 50%; }
            .feature-list { grid-template-columns: repeat(2, 1fr); }
            .hero-buttons { flex-direction: row; justify-content: center; }
            .footer-content { flex-direction: row; justify-content: space-between; text-align: left; }
            .footer-contact { align-items: flex-start; }
        }
        @media (min-width: 992px) {
            .nav-desktop { display: flex; }
            .desktop-only { display: block; }
            .menu-toggle { display: none; }
        }
  </style>
</head>
<body>

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
        <a href="contactt.php" class="btn btn-primary desktop-only">Contactanos</a>
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
          <a href="contactt.php" class="btn btn-primary mobile-btn">Contactanos</a>
        </nav>
      </div>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Proy<span class="highlight">ectos</span></h1>
      <p>Aqui Encontraras Nuestro Primer Proyecto, esperamos que el tuyo aparezca aqui pronto!!</p>
      <div class="hero-buttons">
        <a href="proyectos.php" class="btn btn-highlight">Ver Proyecto</a>
        <a href="contactt.php" class="btn btn-outline">Contactar</a>
      </div>
    </div>
  </section>

  <section class="project">
    <div class="container">
      <h2>Nuestro <span class="highlight">Proyecto</span></h2>
      <div class="project-content">
        <div class="project-images">
          <img src="https://images.unsplash.com/photo-1564466809058-b5a9c85aaf2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Papelería Almendra" class="project-img">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Papelería Almendra interior" class="project-img">
        </div>
        <div class="project-details">
          <h3>Papelería Almendra</h3>
          <p>Una papelería moderna y completa que ofrece todo lo necesario para estudiantes, profesionales y artistas. Con un enfoque en calidad y servicio al cliente.</p>
          
          <div class="project-features">
            <h4>Lo que ofrecemos:</h4>
            <div class="feature-list">
              <div class="feature-item">
                <span class="feature-icon">✓</span>
                <span>Material escolar de alta calidad</span>
              </div>
              <div class="feature-item">
                <span class="feature-icon">✓</span>
                <span>Suministros de oficina</span>
              </div>
              <div class="feature-item">
                <span class="feature-icon">✓</span>
                <span>Material artístico profesional</span>
              </div>
              <div class="feature-item">
                <span class="feature-icon">✓</span>
                <span>Servicios de impresión y copiado</span>
              </div>
            </div>
          </div>
          
          <a href="#" class="btn btn-primary">Visitar Tienda</a>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <h2>¿Necesitas material específico?</h2>
      <p>Contáctanos y te ayudaremos a encontrar exactamente lo que buscas</p>
      <a href="cotizacion.php" class="btn btn-highlight">Solicitar Presupuesto</a>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-info">
          <h3>Hyper<span class="highlight">Infinity</span></h3>
          <p>Soluciones creativas para tu negocio</p>
        </div>
        <div class="footer-contact">
          <div class="contact-item">
            <span>+34 912 345 678</span>
          </div>
          <div class="contact-item">
            <span>info@hyperinfinity.com</span>
          </div>
          <div class="contact-item">
            <span>Calle Principal, 123, Madrid</span>
          </div>
        </div>
      </div>
      <p style="margin-top: 2rem;">&copy; 2025 HyperInfinity - Todos los derechos reservados</p>
    </div>
  </footer>

  <script>
    document.getElementById('menuToggle').addEventListener('click', function() {
      document.getElementById('mobileMenu').classList.toggle('active');
    });
  </script>

</body>
</html>
