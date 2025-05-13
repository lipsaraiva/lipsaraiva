<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page - Serviços de Programação</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .parallax-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://source.unsplash.com/random/1920x1080?technology');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            color: white;
        }

        nav {
            padding: 1rem;
            background: rgba(0,0,0,0.8);
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 60px);
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        section {
            padding: 4rem 2rem;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }

        .service-card {
            padding: 2rem;
            background: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        #contact-form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        #contact-form input,
        #contact-form textarea {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 1rem 2rem;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
    </style>
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

    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Simple parallax effect
        window.addEventListener('scroll', function() {
            const parallaxSections = document.querySelectorAll('.parallax-section');
            parallaxSections.forEach(section => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * 0.5;
                section.style.backgroundPosition = `center ${rate}px`;
            });
        });

        // Form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Formulário enviado! (Esta é apenas uma demonstração)');
        });
    </script>
</body>
</html>



