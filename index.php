<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/aos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Gugi&family=Saira+Condensed:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <style>
        /* Estilos Gerais */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 0.9rem;
            line-height: 1;
            margin: 0;
            padding: 0;
        }

        /* Menu Fixo */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
        }

        .navbar-nav .nav-link {
            margin: 0 15px;
            transition: color 0.3s ease;
            font-family: "Jockey One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #ffffff !important;
            font-size: 0.8rem;
            font-weight: 200;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(191, 94, 236);
        }

        /* Seções de Página Inteira */
        .section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            color: white;
        }

        .section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .content {
            z-index: 1;
            text-align: center;
            padding: 30px;
            max-width: 800px;
        }

        .content h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        /* Estilos específicos para cada seção */
        #inicio {
            background-image: url('/api/placeholder/1920/1080');
        }

        #jobs {
            padding: 0;
        }

        #jobs .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        #jobs .carousel-caption {
            bottom: 20%;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        #servicos {
            background-image: url('/api/placeholder/1920/1080');
        }

        #contato {
            background-image: url('/api/placeholder/1920/1080');
        }

        /* Formulário de Contato */
        .contact-form {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
        }

        .contact-form .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background-color: #000;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #17a2b8;
        }
    </style>
</head>

<body>
    <!-- Menu Fixo -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav mx-auto d-flex flex-row text-center">
                    <li class="nav-item">
                        <a href="#inicio" class="nav-link text-center"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#jobs" class="nav-link text-center">JOBS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#servicos" class="nav-link text-center">SERVIÇOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contato" class="nav-link text-center">CONTATO</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://lipsaraiva.com.br/blog" target="_blank" class="nav-link text-center">ARTIGOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Início -->
    <section id="inicio" class="section" style="background-image: url('/images/space_mobile.jpg'); background-size: cover; background-position: center;">
        <div class="content">
            <div class="text-center" data-aos="zoom-in">
                <p style="font-family: 'Gugi', sans-serif; font-size: 4rem;">SARAIVA</p>
            </div>
            <p class="text-center text-white" data-aos="fade-up"
                style="font-family: 'Saira Condensed', sans-serif; font-size: 0.9rem; line-height: normal;
            max-width: 800px; margin: 0 auto; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                Mais de 25 anos de experiência transformando ideias em presença digital! Soluções completas em web design, sistemas sob medida, hospedagem e muito mais — com qualidade, confiança e inovação para impulsionar seu negócio online.
            </p>
        </div>
    </section>

    <!-- Seção Jobs (Carrossel) -->
    <section id="jobs" class="section">
        <div id="carouselJobs" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselJobs" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselJobs" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselJobs" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active  h-100">
                    <img src="images/space_mobile.jpg" class="d-block w-100 h-100" alt="Projeto 1" style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img src="images/space.jpg" class="d-block w-100 h-100" alt="Projeto 2" style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Projeto 2</h3>
                        <p>Este é o nosso segundo projeto, que destaca nossa capacidade de criar soluções personalizadas para nossos clientes.</p>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <img src="images/space_mobile.jpg" class="d-block w-100 h-100" alt="Projeto 3" style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Projeto 3</h3>
                        <p>Nosso terceiro projeto exemplifica nossa abordagem inovadora e nossa atenção aos detalhes.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselJobs" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselJobs" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </section>

    <!-- Seção Serviços -->
    <section id="servicos" class="section" style="background-image: url('/images/mountain_mobile.jpg'); background-size: cover; background-position: center;">
        <div class="content">
            <div class="container">
                <div class="row row-cols-2 gx-2">
                    
                    <!-- Card 1 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(108, 103, 26, 0.8),rgba(243, 168, 7, 0.8));">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 0.9rem"><i class="fas fa-laptop"></i> Criação de landing pages e websites</h4>
                                <p class="card-text" style="font-size: 0.9rem">Sites bonitos, rápidos e pensados pra converter.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg, #2C3E50, #3498DB);">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 0.9rem"><i class="fas fa-server"></i> Hospedagem e e-mail profissional</h4>
                                <p class="card-text" style="font-size: 0.9rem">Seu site e e-mail funcionando direitinho, sem dor de cabeça.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg, #4A00E0, #8E2DE2);">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 0.9rem"><i class="fas fa-globe"></i> Registro e manutenção de domínios</h4>
                                <p class="card-text" style="font-size: 0.9rem">Cuido do seu endereço na internet pra você não se preocupar com isso.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgb(6, 99, 10),rgb(20, 199, 29));">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 0.9rem"><i class="fas fa-code"></i> Sistemas web personalizados</h4>
                                <p class="card-text" style="font-size: 0.9rem">Soluções feitas sob medida pro seu negócio ou projeto.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg, #614385, #516395);">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 0.9rem"><i class="fas fa-palette"></i> Design gráfico e web</h4>
                                <p class="card-text" style="font-size: 0.9rem">Visual bonito e profissional, do jeito que sua marca merece.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgb(177, 88, 117),rgb(94, 6, 86));">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 0.9rem"><i class="fas fa-share-alt"></i> Redes sociais</h4>
                                <p class="card-text" style="font-size: 0.9rem">Ajudo você a manter presença e relevância nas redes, com estratégia e consistência.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <p class="text-center" style="font-size: 0.9rem;">
                Quer saber os valores? <br>Entre em <a href="#contato"><strong>contato</strong></a> e vamos montar o pacote ideal pra você.
            </p>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contato" class="section">
        <div class="content">
            <h1>Entre em Contato</h1>
            <p>Estamos ansiosos para ouvir sobre seu próximo projeto. Preencha o formulário abaixo e entraremos em contato em breve.</p>

            <div class="contact-form">
                <form name="formulario" id="formulario" action="contato.php" method="POST"> 
                    <input type="text" class="form-control yespadding" id="nom" placeholder="Nome Completo" name="nome" required> 
                    <input type="text" class="form-control yespadding" id="tel" placeholder="Telefone" name="telefone"> 
                    <input type="email" class="form-control yespadding" id="ema" placeholder="Email" name="email" required> 
                    <textarea class="form-control yespadding" id="men" rows="5" name="mensagem" placeholder="Deixe a sua mensagem" required></textarea> 
                    <button type="submit" name="submit" class="btn btn-block btn-success yespadding" onclick="return js_validar()">Enviar</button> 
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="mt-4">
                    <p>&copy; 2025 Todos os direitos reservados | lipsaraiva.com.br</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS e Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/aos.settings.js"></script>

    <!-- JavaScript personalizado para rolagem suave -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Selecionar todos os links do menu
            const menuLinks = document.querySelectorAll('.navbar-nav .nav-link');

            // Adicionar evento de clique a cada link
            menuLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Obter o alvo do link
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);

                    // Rolar suavemente até a seção
                    window.scrollTo({
                        top: targetSection.offsetTop,
                        behavior: 'smooth'
                    });
                });
            });

            // Destacar link ativo durante a rolagem
            window.addEventListener('scroll', function() {
                const sections = document.querySelectorAll('.section');
                const scrollPosition = window.scrollY;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    const sectionId = section.getAttribute('id');

                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        menuLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === '#' + sectionId) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>