<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page - Serviços de Programação</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Smooth scroll polyfill -->
    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
</head>
<body>
    <header class="parallax-header">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a href="blog.lipsaraiva.com.br">Artigos</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Serviços de Programação</h1>
            <p>Soluções tecnológicas para seu negócio</p>
        </div>
    </header>

    <main>
        <section id="services" class="parallax-section">
            <h2>Nossos Serviços</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Desenvolvimento Web</h3>
                    <p>Sites e aplicações web modernas</p>
                </div>
                <!-- Add more service cards -->
            </div>
        </section>

        <section id="about" class="parallax-section">
            <h2>Sobre Nós</h2>
            <div class="about-content">
                <p>Sua descrição aqui...</p>
            </div>
        </section>

        <section id="contact">
            <h2>Contato</h2>
            <form id="contact-form">
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Seus Direitos Reservados</p>
    </footer>

    <script src="js/parallax.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
