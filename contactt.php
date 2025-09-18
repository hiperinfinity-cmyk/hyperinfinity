<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto - HyperInfinity</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --color-primary: #1f2a47ff;
            --color-secondary: #ffffff;
            --color-accent:  #e4c33eff; 
            --font-family: 'Poppins', sans-serif;
            --border-radius: 0.5rem;
            --transition: all 0.3s ease;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: var(--font-family);
            line-height: 1.8;
            color: #212529;
            background: var(--color-secondary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

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

        /* LOGO COMPLETO */
        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 2rem;
            font-weight: 800;
            color: var(--color-primary);
            text-decoration: none;
        }
        .logo-img {
            height: 70px;
            width: auto;
            object-fit: contain;
        }

        .nav-desktop { 
            display: flex;
            align-items: center;
        }
        .nav-link {
            margin: 0 1rem;
            font-weight: 600;
            font-size: 1.2rem;
            color: #495057;
            transition: var(--transition);
            text-decoration: none;
        }
        .nav-link:hover, .nav-link.active { color: var(--color-accent); }

        .desktop-only { display: block; }

        .menu-toggle {
            display: none;
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
        .nav-mobile .nav-link { padding: 0.75rem 0; text-decoration: none; }
        .mobile-btn { margin-top: 1rem; }

        /* HERO */
        .hero {
            background: var(--color-primary);
            color: var(--color-secondary);
            padding: 6rem 0;
            text-align: center;
        }
        .hero h1 { 
            font-size: 3.5rem; 
            margin-bottom: 1.5rem; 
            color: var(--color-accent); /* CONTACTANOS en amarillo */
        }
        .hero p { font-size: 1.4rem; margin-bottom: 2rem; }

        /* FORM STYLES */
        .form-section {
            padding: 6rem 0;
            background: #f8f9fa;
        }

        .form-container {
            background: var(--color-secondary);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 3rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-title {
            text-align: center;
            margin-bottom: 2.5rem;
            color: var(--color-primary);
        }
        .form-title .highlight {
            color: var(--color-accent);
        }

        .form-group {
            margin-bottom: 1.8rem;
        }

        label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--color-primary);
            font-size: 1.1rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 1rem 1.2rem;
            border: 1px solid #dee2e6;
            border-radius: var(--border-radius);
            background: var(--color-secondary);
            color: #495057;
            font-family: inherit;
            font-size: 1.1rem;
            transition: var(--transition);
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--color-accent);
            box-shadow: 0 0 0 3px rgba(255, 230, 128, 0.3);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .radio-group {
            display: flex;
            gap: 2rem;
            margin-top: 0.5rem;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 0.7rem;
        }

        .radio-option input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #ced4da;
            border-radius: 50%;
            position: relative;
            cursor: pointer;
        }

        .radio-option input[type="radio"]:checked {
            border-color: var(--color-accent);
        }

        .radio-option input[type="radio"]:checked::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            background: var(--color-accent);
            border-radius: 50%;
        }

        .button-container {
            text-align: center;
            margin-top: 2.5rem;
        }

        .btn {
            display: inline-block;
            padding: 1.2rem 2.5rem;
            border-radius: var(--border-radius);
            font-weight: 700;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 1.1rem;
            background: var(--color-accent);
            color: var(--color-primary);
        }

        .btn:hover {
            background: #e6d97f;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* FOOTER */
        .footer {
            background: var(--color-primary);
            color: #adb5bd;
            padding: 3rem 0;
            text-align: center;
            font-size: 1rem;
            margin-top: auto;
        }

        @media (max-width: 992px) {
            .nav-desktop { display: none; }
            .desktop-only { display: none; }
            .menu-toggle { display: flex; }
            
            .form-container {
                padding: 2rem;
            }
            
            .radio-group {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero h1 { font-size: 2.5rem; }
            .hero p { font-size: 1.2rem; }
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
                    <a href="contactt.php" class="btn btn-primary mobile-btn">Contactanos</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>CONTACTANOS</h1>
            <p>Estamos aquí para ayudarte. Completa el formulario y nos pondremos en contacto contigo.</p>
        </div>
    </section>

    <section class="form-section">
        <div class="container">
            <div class="form-container">
                <h2 class="form-title">Formulario de <span class="highlight">Contacto</span></h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombres Completos:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="numero">Número de teléfono:</label>
                        <input type="tel" id="numero" name="numero" required>
                    </div>

                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" id="edad" name="edad" required>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo">
                            <option value="mujer">Mujer</option>
                            <option value="hombre">Hombre</option>
                            <option value="indefinido">Indefinido</option>
                            <option value="prefiero-no-decirlo">Prefiero no decirlo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>¿Deseas recibir notificaciones?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="notificaciones_si" name="notificaciones" value="si" required>
                                <label for="notificaciones_si">Sí</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="notificaciones_no" name="notificaciones" value="no">
                                <label for="notificaciones_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pais">País:</label>
                        <select id="pais" name="pais">
                            <option value="co">Colombia</option>
                            <option value="mx">México</option>
                            <option value="ec">Ecuador</option>
                            <option value="ar">Argentina</option>
                        </select>
                    </div>

                    <div class="button-container">
                        <button type="submit" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 HyperInfinity. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('active');
        });
    </script>
</body>
</html>