<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviços de tecnologia, desenvolvimento web e design. Criação de sites, sistemas, hospedagem e soluções digitais personalizadas.">
    <meta name="keywords" content="desenvolvimento web, web design, criação de sites, sistemas web, hospedagem, design gráfico, tecnologia, desenvolvimento de software">
    <meta name="author" content="lipSaraiva">
    <meta name="robots" content="index, follow">
    <title>lipSaraiva - Desenvolvimento Web, Design e Soluções Digitais</title>
    <link rel="stylesheet" href="css/aos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&family=Jockey+One&family=Open+Sans&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* Estilos Gerais */

        .saira-condensed {
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 1rem !important;
            line-height: 100% !important;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
        }
        
        .open-sans {
            font-family: 'Open Sans', sans-serif !important;
            font-size: 1rem !important;
            line-height: 100% !important;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
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
            transition: color 0.3s ease;
            font-family: "Jockey One", sans-serif !important;
            font-weight: 400;
            font-style: normal;
            color: #ffffff !important;
            font-size: 0.8rem;
            font-weight: 200;
        }
        
        .navbar-nav .nav-link-ext {
            transition: color 0.3s ease;
            font-family: "Jockey One", sans-serif !important;
            font-weight: 400;
            font-style: normal;
            color: #ffffff !important;
            font-size: 0.8rem;
            font-weight: 200;
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

        .card-text {
            font-size: 0.9rem;
            text-align: center;
            line-height: normal;
        }

        /* Estilos específicos para cada seção */

        #cases {
            padding: 0;
        }

        #cases .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        #cases .carousel-caption {
            bottom: 20%;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            z-index: 1000;
        }

        /* Formulário de Contato */
        .contact-form {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
        }

        .contact-form .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            margin-bottom: 15px;
            font-family: 'Open Sans', sans-serif !important;
            font-size: 1rem !important;
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



        @media (max-width: 768px) {
            #inicio {
                background-image: url('/images/inicio_mobile.jpg');
            }
        }
        
        @media (min-width: 769px) {
            #inicio {
                background-image: url('/images/inicio_desktop.jpg');
            }
        }
    </style>
</head>

<body>
    <!-- Menu Fixo -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav mx-auto d-flex flex-row text-center">
                    <li class="nav-item mx-2">
                        <a href="#inicio" class="nav-link text-center text-warning">
                            <i class="fa fa-home me-1"></i>
                            <span style="font-family: 'Gugi', sans-serif;">SARAIVA</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#cases" class="nav-link text-center">CASES</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#servicos" class="nav-link text-center">SERVIÇOS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#contato" class="nav-link text-center">CONTATO</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="https://www.lipsaraiva.com.br/blog/" target="_blank" 
                        class="nav-link text-center text-decoration-none">ARTIGOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Início -->
    <section id="inicio" class="section">
        <div class="content"> 
            <div class="text-center" data-aos="zoom-in">
                <p style="font-family: 'Gugi', sans-serif; font-size: 4rem;">SARAIVA</p>
            </div>
            <p class="text-center text-white saira-condensed" data-aos="fade-up">
                Mais de 25 anos de experiência transformando ideias em presença digital! Soluções completas em web design, sistemas sob medida, hospedagem e muito mais — com qualidade, confiança e inovação para impulsionar seu negócio online.
            </p>
        </div>
    </section>

    <!-- Seção Cases (Carrossel) -->
    <section id="cases" class="section">
        <div id="carouselDark" class="carousel carousel-dark slide h-100">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100" data-bs-interval="10000">
                    <img src="/images/2025_zuri_estetica_mobile.png" class="d-block w-100 h-100" alt="Landing Page: Zuri Estética">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/images/2025_imoveis_fabiana_mobile.png" class="d-block w-100 h-100" alt="Website: Imóveis Fabiana">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/images/2025_advocaciasr_mobile.png" class="d-block w-100 h-100" alt="Website: Imóveis Fabiana">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><i class="fas fa-chevron-left"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><i class="fas fa-chevron-right"></i></span>
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
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(171, 173, 80, 0.4),rgba(211, 205, 123, 0.4));">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed" style="font-size: 1.2rem;"><i class="fas fa-laptop"></i> Criação de landing pages e websites</h4>
                                <p class="card-text saira-condensed">Sites bonitos, rápidos e pensados pra converter.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(95, 173, 80, 0.4),rgba(126, 211, 123, 0.4));">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed" style="font-size: 1.2rem;"><i class="fas fa-server"></i> Hospedagem e e-mail profissional</h4>
                                <p class="card-text saira-condensed">Seu site e e-mail funcionando direitinho, sem dor de cabeça.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(80, 173, 145, 0.4),rgba(123, 211, 196, 0.4));">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed" style="font-size: 1.2rem;"><i class="fas fa-globe"></i> Registro e manutenção de domínios</h4>
                                <p class="card-text saira-condensed">Cuido do seu endereço na internet pra você não se preocupar com isso.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(80, 159, 173, 0.4),rgba(123, 186, 211, 0.4));">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed" style="font-size: 1.2rem;"><i class="fas fa-code"></i> Sistemas web personalizados</h4>
                                <p class="card-text saira-condensed">Soluções feitas sob medida pro seu negócio ou projeto.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(173, 80, 92, 0.4),rgba(229, 157, 163, 0.4));">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed" style="font-size: 1.2rem;"><i class="fas fa-palette"></i> Design gráfico e web</h4>
                                <p class="card-text saira-condensed">Visual bonito e profissional, do jeito que sua marca merece.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100" style="background: linear-gradient(45deg,rgba(108, 80, 173, 0.4),rgba(123, 125, 211, 0.4));">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed" style="font-size: 1.2rem;"><i class="fas fa-share-alt"></i> Redes sociais</h4>
                                <p class="card-text saira-condensed">Ajudo você a manter presença e relevância nas redes, com estratégia e consistência.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <p class="text-center mt-3 saira-condensed">
                Quer saber os valores? <br>
                Entre em <a href="#contato" style="color: white; text-decoration: none;"><strong>contato</strong></a> <br>
                e vamos montar o pacote ideal pra você.
            </p>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contato" class="section" style="background-image: url('/images/cafe_mobile.jpg'); background-size: cover; background-position: center;">
        <div class="content">
            <p class="text-center mt-3 saira-condensed">
                Quero ouvir sobre seu próximo projeto. Preencha o formulário abaixo e entrarei em contato em breve.
            </p>
            <div class="contact-form">
                <form name="formulario" id="formulario" action="contato.php" method="POST"> 
                    <input type="text" class="form-control form-control-sm" id="nom" placeholder="Nome Completo" name="nome" required> 
                    <input type="text" class="form-control form-control-sm" id="tel" placeholder="Telefone" name="telefone"> 
                    <input type="email" class="form-control form-control-sm" id="ema" placeholder="Email" name="email" required> 
                    <textarea class="form-control form-control-sm" id="men" rows="5" name="mensagem" placeholder="Deixe a sua mensagem" required></textarea> 
                    <button type="submit" name="submit" class="btn btn_sm btn-block btn-success">
                        <i class="fas fa-envelope me-1"></i> Enviar
                    </button> 
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="mt-4">
                    <p class="text-center saira-condensed">&copy; 2025 Todos os direitos reservados | lipsaraiva.com.br</p>
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