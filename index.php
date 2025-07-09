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
    
    <!-- External CSS -->
    <link rel="stylesheet" href="css/aos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&family=Jockey+One&family=Open+Sans&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* ==========================================================================
           CSS VARIABLES
           ========================================================================== */
        :root {
            --primary-shadow: 2px 2px 4px rgba(0,0,0,0.8);
            --overlay-dark: rgba(0, 0, 0, 0.5);
            --overlay-light: rgba(255, 255, 255, 0.9);
            --section-padding: 30px;
            --border-radius: 10px;
            --transition-speed: 0.3s;
        }

        /* ==========================================================================
           RESET & BASE STYLES
           ========================================================================== */
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            width: 100vw;
            overflow-x: hidden;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        /* ==========================================================================
           TYPOGRAPHY
           ========================================================================== */
        .saira-condensed {
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 1rem !important;
            line-height: 1.2 !important;
            text-shadow: var(--primary-shadow);
        }
        
        .open-sans {
            font-family: 'Open Sans', sans-serif !important;
            font-size: 1rem !important;
            line-height: 1.2 !important;
            text-shadow: var(--primary-shadow);
        }

        .jockey-one {
            font-family: "Jockey One", sans-serif !important;
            font-weight: 400;
            font-style: normal;
        }

        /* ==========================================================================
           NAVIGATION
           ========================================================================== */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
        }

        .navbar-nav .nav-link {
            transition: color var(--transition-speed) ease;
            color: #ffffff !important;
            font-size: 0.8rem;
            font-weight: 200;
        }

        .navbar-nav .nav-link:hover {
            color: #17a2b8 !important;
        }

        /* ==========================================================================
           SECTIONS
           ========================================================================== */
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
            background-color: var(--overlay-dark);
        }

        .content {
            z-index: 1;
            text-align: center;
            padding: var(--section-padding);
            max-width: 800px;
            position: relative;
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

        /* ==========================================================================
           HERO SECTION
           ========================================================================== */
        #inicio {
            background-image: url('/images/2025/inicio_mobile.jpg');
        }

        @media (min-width: 769px) {
            #inicio {
                background-image: url('/images/2025/inicio_desktop.jpg');
            }
        }

        /* ==========================================================================
           CAROUSEL SECTIONS
           ========================================================================== */
        .carousel-section {
            padding: 0 !important;
            margin: 0 !important;
            width: 100vw !important;
            max-width: 100vw !important;
            overflow: hidden;
        }

        .carousel,
        .carousel-inner,
        .carousel-item {
            width: 100vw !important;
            height: 100vh !important;
            margin: 0;
            padding: 0;
        }

        .carousel-item img {
            width: 100vw !important;
            height: 100vh !important;
            object-fit: cover;
        }

        /* Case Description Overlay */
        .case-desc {
            position: absolute;
            top: 100px;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 2;
            display: flex;
            align-items: center;
        }

        .case-desc-inner {
            background: var(--overlay-dark);
            color: #fff;
            border-radius: 12px;
            padding: 24px 18px;
            pointer-events: auto;
            backdrop-filter: blur(5px);
        }

        .case-title {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 1.6rem;
            margin-bottom: 12px;
        }

        .case-text {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 0.9rem;
            line-height: 1.2;
            margin-bottom: 0;
        }

        /* Mobile Layout */
        @media (max-width: 768px) {
            .case-desc {
                justify-content: center;
                align-items: flex-start;
                padding-top: 1vh;
            }
            
            .case-desc-inner {
                width: 90vw;
                max-width: 95vw;
                text-align: center;
            }
        }

        /* Desktop Layout */
        @media (min-width: 769px) {
            .case-desc {
                justify-content: flex-start;
                align-items: center;
                padding-left: 4vw;
            }
            
            .case-desc-inner {
                width: 30vw;
                min-width: 320px;
                max-width: 420px;
                text-align: left;
            }
        }

        /* ==========================================================================
           SERVICES SECTION
           ========================================================================== */

        #servicos {
            background-image: url('/images/2025/servicos_mobile.jpg');
        }

        @media (min-width: 769px) {
            #servicos {
                background-image: url('/images/2025/servicos_desktop.jpg');
            }
        }

        .service-card {
            background: linear-gradient(45deg, rgba(95, 173, 80, 0.4), rgba(126, 211, 123, 0.4));
            transition: transform var(--transition-speed) ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card.card-1 { background: linear-gradient(45deg, rgba(171, 173, 80, 0.4), rgba(211, 205, 123, 0.4)); }
        .service-card.card-2 { background: linear-gradient(45deg, rgba(95, 173, 80, 0.4), rgba(126, 211, 123, 0.4)); }
        .service-card.card-3 { background: linear-gradient(45deg, rgba(80, 173, 145, 0.4), rgba(123, 211, 196, 0.4)); }
        .service-card.card-4 { background: linear-gradient(45deg, rgba(80, 159, 173, 0.4), rgba(123, 186, 211, 0.4)); }
        .service-card.card-5 { background: linear-gradient(45deg, rgba(173, 80, 92, 0.4), rgba(229, 157, 163, 0.4)); }
        .service-card.card-6 { background: linear-gradient(45deg, rgba(108, 80, 173, 0.4), rgba(123, 125, 211, 0.4)); }

        .card-text {
            font-size: 0.9rem;
            text-align: center;
            line-height: normal;
        }

        .card-title {
            font-size: 1.2rem;
        }

        /* ==========================================================================
           CONTACT SECTION
           ========================================================================== */
        #contato {
            background-image: url('/images/2025/contato_mobile.jpg');
        }

        @media (min-width: 769px) {
            #contato {
                background-image: url('/images/2025/contato_desktop.jpg');
            }
        }

        .contact-form {
            background-color: rgba(0, 0, 0, 0.2);
            padding: var(--section-padding);
            border-radius: var(--border-radius);
            width: 100%;
            max-width: 500px;
            backdrop-filter: blur(5px);
        }

        .contact-form .form-control {
            background-color: var(--overlay-light);
            border: none;
            margin-bottom: 15px;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            transition: box-shadow var(--transition-speed) ease;
        }

        .contact-form .form-control:focus {
            box-shadow: 0 0 10px rgba(23, 162, 184, 0.5);
        }

        /* ==========================================================================
           FOOTER
           ========================================================================== */
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
            transition: color var(--transition-speed) ease;
        }

        .social-icons a:hover {
            color: #17a2b8;
        }

        /* ==========================================================================
           UTILITIES
           ========================================================================== */
        .text-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color var(--transition-speed) ease;
        }

        .text-link:hover {
            color: #17a2b8;
        }

        /* ==========================================================================
           RESPONSIVE DESIGN
           ========================================================================== */
        @media (max-width: 768px) {
            .content h1 {
                font-size: 2.5rem;
            }
            
            .content p {
                font-size: 1.2rem;
            }
            
            .brand-title {
                font-size: 3rem !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav mx-auto d-flex flex-row text-center jockey-one">
                    <li class="nav-item mx-2">
                        <a href="#inicio" class="nav-link text-center">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-2 d-none d-md-block">
                        <a href="#cases" class="nav-link text-center">CASES</a>
                    </li>
                    <li class="nav-item mx-2 d-block d-md-none">
                        <a href="#cases_mobile" class="nav-link text-center">CASES</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#servicos" class="nav-link text-center">SERVIÇOS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#contato" class="nav-link text-center">CONTATO</a>
                    </li>
                    <!-- <li class="nav-item mx-2">
                        <a href="https://www.lipsaraiva.com.br/blog/" target="_blank" 
                           class="nav-link text-center text-decoration-none">ARTIGOS</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="section">
        <div class="content"> 
            <div class="text-center" data-aos="zoom-in">
                <p class="brand-title" style="font-family: 'Gugi', sans-serif; font-size: 4rem;">SARAIVA</p>
            </div>
            <p class="text-center text-white saira-condensed" data-aos="fade-up">
                Mais de 25 anos de experiência transformando ideias em presença digital! 
                Soluções completas em web design, sistemas sob medida, hospedagem e muito mais — com qualidade, 
                confiança e inovação para impulsionar seu negócio online.
            </p>
        </div>
    </section>

    <!-- Cases Section - Desktop -->
    <section id="cases" class="section carousel-section d-none d-md-block">
        <div id="carouselDark" class="carousel carousel-dark slide h-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
            </div>
            <div class="carousel-inner h-100">

                <!-- Case 1 -->
                <div class="carousel-item active h-100" data-bs-interval="10000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/zuriestetica_desktop.jpg">
                        <img src="/images/2025/zuriestetica_mobile.jpg" class="d-block" alt="Landing Page: Zuri Estética">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Landing Page para Zuri Estética</h5>
                            <p class="case-text">Landing page moderna, responsiva e otimizada para conversão, 
                                desenvolvida para destacar os serviços da clínica e facilitar o agendamento online de novos clientes.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 2 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/imoveisfabiana_desktop.jpg">
                        <img src="/images/2025/imoveisfabiana_mobile.jpg" class="d-block" alt="Website: Imóveis Fabiana">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Imóveis Fabiana</h5>
                            <p class="case-text">Portal imobiliário moderno, com busca inteligente de imóveis, integração direta 
                                ao WhatsApp para atendimento rápido e painel administrativo fácil de usar — pensado para gerar mais contatos 
                                e facilitar a gestão do seu negócio.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 3 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/advocaciasr_desktop.jpg">
                        <img src="/images/2025/advocaciasr_mobile.jpg" class="d-block" alt="Website: Advocacia SR">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Landing Page Advocacia SR</h5>
                            <p class="case-text">Site institucional elegante e responsivo para escritório de advocacia, com área de artigos, 
                                blog integrado, formulário de contato seguro e foco em transmitir credibilidade, confiança e captar novos clientes.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 4 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/ucorp_desktop.jpg">
                        <img src="/images/2025/ucorp_mobile.jpg" class="d-block" alt="Website: Ucorp">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Ucorp</h5>
                            <p class="case-text">Site institucional para empresa de mobilidade urbana, desenvolvido em 
                                parceria com uma agência responsável pelo layout. 
                                Plataforma moderna, responsiva e focada em apresentar soluções inovadoras no estilo Uber, 
                                com atendimento personalizado para clientes e parceiros.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 5 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/croaciamc_desktop.jpg">
                        <img src="/images/2025/croaciamc_mobile.jpg" class="d-block" alt="Website: Croacia MC">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Metalúrgica Croácia</h5>
                            <p class="case-text">Site institucional para a Metalúrgica Croácia, com layout exclusivo, 
                                responsivo e otimizado para apresentar os serviços e diferenciais da empresa. Foco em navegação simples, 
                                contato facilitado e credibilidade para conquistar novos clientes.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 6 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/estafacil_desktop.jpg">
                        <img src="/images/2025/estafacil_mobile.jpg" class="d-block" alt="Website: Estafacil">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Estafacil</h5>
                            <p class="case-text">Site institucional para a Estafacil, empresa especializada em soluções de estacionamento. 
                                Layout exclusivo, responsivo e otimizado para apresentar serviços, diferenciais e tecnologia da empresa. 
                                Foco em navegação simples, contato facilitado e credibilidade para atrair novos clientes e parceiros.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 7 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/sistemas_desktop.jpg">
                        <img src="/images/2025/sistemas_mobile.jpg" class="d-block" alt="Sistemas Web">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Sistemas Web</h5>
                            <p class="case-text"></p>
                                Sistemas web desenvolvidos sob medida para os mais diversos segmentos: gestão empresarial, controle financeiro, agendamento online, plataformas educacionais, soluções para eventos, integrações com APIs e muito mais. Projetos personalizados, seguros, responsivos e focados em facilitar processos, aumentar produtividade e impulsionar resultados para empresas de todos os portes.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 8 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/artes_desktop.jpg">
                        <img src="/images/2025/artes_mobile.jpg" class="d-block" alt="Design Gráfico e Web">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Design Gráfico e Web</h5>
                            <p class="case-text"></p>
                                Serviços de design gráfico e web para todos os segmentos: criação de identidades visuais, logotipos, materiais institucionais, apresentações, banners, posts para redes sociais, layouts de sites, interfaces de sistemas, personalização de plataformas e muito mais. Projetos criativos, profissionais e alinhados à estratégia do seu negócio, para destacar sua marca e comunicar com impacto em qualquer meio digital ou impresso.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 9 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/images/2025/logotipos_desktop.jpg">
                        <img src="/images/2025/logotipos_mobile.jpg" class="d-block" alt="Branding Design">
                    </picture>
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Branding Design</h5>
                            <p class="case-text"></p>
                                Serviços completos de branding e criação de logotipos para todos os segmentos: desenvolvimento de marcas únicas, memoráveis e alinhadas ao propósito do seu negócio. Do briefing ao conceito visual, entrego identidade visual profissional, manual de marca, aplicações em materiais digitais e impressos, além de consultoria estratégica para fortalecer sua presença no mercado e gerar valor para sua empresa desde o primeiro contato.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Cases Section - Mobile -->
    <section id="cases_mobile" class="section carousel-section d-block d-md-none">
        <div id="carouselDarkMob" class="carousel carousel-dark slide h-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselDarkMob" data-bs-slide-to="8" aria-label="Slide 9"></button>
            </div>
            <div class="carousel-inner h-100">
                
                <!-- Case 1 -->
                <div class="carousel-item active h-100" data-bs-interval="10000">
                    <img src="/images/2025/zuriestetica_mobile.jpg" class="d-block" alt="Landing Page: Zuri Estética">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Landing Page para Zuri Estética</h5>
                            <p class="case-text">Landing page moderna, responsiva e otimizada para conversão, 
                                desenvolvida para destacar os serviços da clínica e facilitar o agendamento online de novos clientes.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 2 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/imoveisfabiana_mobile.jpg" class="d-block" alt="Website: Imóveis Fabiana">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Imóveis Fabiana</h5>
                            <p class="case-text">Portal imobiliário moderno, com busca inteligente de imóveis, integração direta 
                                ao WhatsApp para atendimento rápido e painel administrativo fácil de usar — pensado para gerar mais contatos 
                                e facilitar a gestão do seu negócio.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 3 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/advocaciasr_mobile.jpg" class="d-block" alt="Website: Advocacia SR">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Landing Page Advocacia SR</h5>
                            <p class="case-text">Site institucional elegante e responsivo para escritório de advocacia, com área de artigos, 
                                blog integrado, formulário de contato seguro e foco em transmitir credibilidade, confiança e captar novos clientes.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 4 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/ucorp_mobile.jpg" class="d-block" alt="Website: Ucorp">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Ucorp</h5>
                            <p class="case-text">Site institucional para empresa de mobilidade urbana, desenvolvido em 
                                parceria com uma agência responsável pelo layout. 
                                Plataforma moderna, responsiva e focada em apresentar soluções inovadoras no estilo Uber, 
                                com atendimento personalizado para clientes e parceiros.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Case 5 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/croaciamc_mobile.jpg" class="d-block" alt="Website: Croácia MC">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title"> Site para Metalúrgica Croácia</h5>
                            <p class="case-text">
                                Site institucional para a Metalúrgica Croácia, com layout exclusivo, 
                                responsivo e otimizado para apresentar os serviços e diferenciais da empresa. Foco em navegação simples, 
                                contato facilitado e credibilidade para conquistar novos clientes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Case 6 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/estafacil_mobile.jpg" class="d-block" alt="Website: Estafacil">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Site para Estafacil</h5>
                            <p class="case-text">
                                Site institucional para a Estafacil, empresa especializada em soluções de estacionamento. 
                                Layout exclusivo, responsivo e otimizado para apresentar serviços, diferenciais e tecnologia da empresa. 
                                Foco em navegação simples, contato facilitado e credibilidade para atrair novos clientes e parceiros.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Case 7 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/sistemas_mobile.jpg" class="d-block" alt="Sistemas Web">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Sistemas Web</h5>
                            <p class="case-text">
                                Sistemas web desenvolvidos sob medida para os mais diversos segmentos: gestão empresarial, controle financeiro, agendamento online, plataformas educacionais, soluções para eventos, integrações com APIs e muito mais. Projetos personalizados, seguros, responsivos e focados em facilitar processos, aumentar produtividade e impulsionar resultados para empresas de todos os portes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Case 8 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/artes_mobile.jpg" class="d-block" alt="Design Gráfico e Web">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Design Gráfico e Web</h5>
                            <p class="case-text">
                                Serviços de design gráfico e web para todos os segmentos: criação de identidades visuais, logotipos, materiais institucionais, apresentações, banners, posts para redes sociais, layouts de sites, interfaces de sistemas, personalização de plataformas e muito mais. Projetos criativos, profissionais e alinhados à estratégia do seu negócio, para destacar sua marca e comunicar com impacto em qualquer meio digital ou impresso.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Case 9 -->
                <div class="carousel-item h-100" data-bs-interval="8000">
                    <img src="/images/2025/logotipos_mobile.jpg" class="d-block" alt="Branding Design">
                    <div class="case-desc">
                        <div class="case-desc-inner">
                            <h5 class="case-title">Branding Design</h5>
                            <p class="case-text">
                                Serviços completos de branding e criação de logotipos para todos os segmentos: desenvolvimento de marcas únicas, memoráveis e alinhadas ao propósito do seu negócio. Do briefing ao conceito visual, entrego identidade visual profissional, manual de marca, aplicações em materiais digitais e impressos, além de consultoria estratégica para fortalecer sua presença no mercado e gerar valor para sua empresa desde o primeiro contato.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDarkMob" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDarkMob" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicos" class="section">
        <div class="content">
            <div class="container">
                <div class="row row-cols-2 gx-2">
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100 service-card card-1">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed">
                                    <i class="fas fa-laptop"></i> Criação de landing pages e websites
                                </h4>
                                <p class="card-text saira-condensed">Sites bonitos, rápidos e pensados pra converter.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100 service-card card-2">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed">
                                    <i class="fas fa-server"></i> Hospedagem e e-mail profissional
                                </h4>
                                <p class="card-text saira-condensed">Seu site e e-mail funcionando direitinho, sem dor de cabeça.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100 service-card card-3">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed">
                                    <i class="fas fa-globe"></i> Registro e manutenção de domínios
                                </h4>
                                <p class="card-text saira-condensed">Cuido do seu endereço na internet pra você não se preocupar com isso.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100 service-card card-4">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed">
                                    <i class="fas fa-code"></i> Sistemas web personalizados
                                </h4>
                                <p class="card-text saira-condensed">Soluções feitas sob medida pro seu negócio ou projeto.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100 service-card card-5">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed">
                                    <i class="fas fa-palette"></i> Design gráfico e web
                                </h4>
                                <p class="card-text saira-condensed">Visual bonito e profissional, do jeito que sua marca merece.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-2" data-aos="fade-up">
                        <div class="card text-white h-100 service-card card-6">
                            <div class="card-body">
                                <h4 class="card-title saira-condensed">
                                    <i class="fas fa-share-alt"></i> Redes sociais
                                </h4>
                                <p class="card-text saira-condensed">Ajudo você a manter presença e relevância nas redes, com estratégia e consistência.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-3 saira-condensed">
                Quer saber os valores? <br>
                Entre em <a href="#contato" class="text-link">contato</a> <br>
                e vamos montar o pacote ideal pra você.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="section">
        <div class="content">
            <p class="text-center mt-3 saira-condensed">
                Quero ouvir sobre seu próximo projeto. <br>Preencha o formulário abaixo e entrarei em contato em breve.
            </p>
            <div class="contact-form">
                <form name="formulario" id="formulario" action="contato.php" method="POST"> 
                    <input type="text" class="form-control form-control-sm" id="nome" placeholder="Nome Completo" name="nome" required> 
                    <input type="tel" class="form-control form-control-sm" id="telefone" placeholder="Telefone" name="telefone"> 
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Email" name="email" required> 
                    <textarea class="form-control form-control-sm" id="mensagem" rows="5" name="mensagem" placeholder="Deixe a sua mensagem" required></textarea> 
                    <button type="submit" name="submit" class="btn btn-sm btn-block btn-success w-100">
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
                <div class="col-12 mt-4">
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
                    // Permitir comportamento padrão para links externos
                    const href = this.getAttribute('href');
                    if (href.startsWith('http://') || href.startsWith('https://')) {
                        return;
                    }

                    e.preventDefault();

                    // Obter o alvo do link
                    const targetId = href;
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