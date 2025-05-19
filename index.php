<!doctype html>
<html lang="pt-br">

<head>
    <title>Saraiva - Soluções para Web</title> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" /> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Saira+Condensed&family=Michroma&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ekko-lightbox.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        /* GERAL */

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
            min-height: 100% !important;
            /* padding: 0px;
            margin: 0px; */
        }

        body {
            font-family: "Michroma", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #ffffff;
            line-height: normal;
        }

        a:link {
            text-decoration: none !important;
            color: #ffffff;
        }

        a:visited {
            text-decoration: none !important;
            color: #ffffff;
        }

        a:hover {
            text-decoration: none !important;
            color: #ffffff;
        }

        a:active {
            text-decoration: none !important;
            color: #ffffff;
        }

        /* FIM: GERAL */

        /* NAVBAR */

        .nav-link {
            font-family: "Jockey One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #ffffff !important;
            font-size: 0.8rem;
            font-weight: 200;
        }

        /* FIM: NAVBAR */

        #webdesign {
            padding: 50px 3rem 50px 3rem;
            background-color: #FF491B;
        }

        #designgrafico {
            padding: 50px 3rem 50px 3rem;
        }

        #desenvolvimentoweb {
            padding: 50px 3rem 50px 3rem;
            background-color: #F8B732;
        }

        #sobre {
            padding: 50px 3rem 50px 3rem;
        }

        #contato {
            padding: 50px 3rem 50px 3rem;
            background-color: #E0DCE4;
        }

        .titulo {
            writing-mode: vertical-lr;
            text-orientation: mixed;
            font-size: 2.5rem;
            font-weight: 200;
            color: #ffffff !important;
        }

        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }

        .yespadding {
            padding: 5px !important;
            margin: 5px !important;
        }



        /* SCROLL */

        #return-to-top {
            position: fixed;
            z-index: 99;
            bottom: 20px;
            right: 20px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #return-to-top i {
            color: #fff;
            margin: 0;
            position: relative;
            left: 16px;
            top: 13px;
            font-size: 19px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #return-to-top:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        #return-to-top:hover i {
            color: #fff;
            top: 5px;
        }

        /* FIM SCROLL */

        /* MOBILE */

        @media only screen and (max-width: 768px) {

            .titulo {
                writing-mode: horizontal-tb;
                text-orientation: mixed;
                font-size: 2.5rem;
                font-weight: 200;
                color: #ffffff !important;
            }

        }

        /* FIM: MOBILE */
    </style>
</head>

<body>
    <!-- <a href="#" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> -->
    <nav class="navbar navbar-expand navbar-light" 
    style="position: fixed; top: 0; width: 100%; z-index: 1000; background-color: rgba(0, 0, 0, 0.9);">
        <div class="container">
            <div class="navbar-nav mx-auto">
                <a href="#inicio" class="nav-item nav-link" style="color: #ffffff;"><i class="fa fa-home"></i></a>
                <a href="#webdesign" class="nav-item nav-link" style="color: #ffffff;">WORKS</a>
                <a href="#sobre" class="nav-item nav-link" style="color: #ffffff;">SOBRE</a>
                <a href="#contato" class="nav-item nav-link" style="color: #ffffff;">CONTATO</a>
                <a href="https://lipsaraiva.com.br/blog" target="_blank" class="nav-item nav-link" style="color: #ffffff;">ARTIGOS</a>
            </div>
        </div>
    </nav>
    

    <section id="inicio">
        <!-- Background image -->
        <div style="position: relative;">
            <img class="img-fluid w-100 d-none d-md-block" src="images/space.jpg" alt="Desktop background">
            <img class="img-fluid w-100 d-md-none" src="images/space_mobile.jpg" alt="Mobile background" style="min-height: 100vh; object-fit: cover;">
        
            <!-- Content overlay -->
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; padding: 0 20px;">
                <div class="text-center">
                    <p style="font-family: 'Jockey One', sans-serif; font-size: 5rem; color: transparent; -webkit-text-stroke: 2px white;">SARAIVA</p>
                </div>
                <p class="text-center text-white" data-aos="fade-up" 
                style="font-family: 'Saira Condensed', sans-serif; max-width: 800px; margin: 0 auto; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                    Com mais de 25 anos de experiência na área de tecnologia, ofereço soluções completas e personalizadas para a sua presença digital. Atuo com excelência em web design, design gráfico, desenvolvimento de sistemas web sob medida, além de serviços essenciais como hospedagem, manutenção de domínio e gestão de e-mails profissionais. Se você busca qualidade, confiabilidade e um parceiro com vasta expertise para impulsionar seu negócio online, estou pronto para transformar sua ideia em resultados.
                </p>
            </div>
        </div>
    </section>

    <section id="webdesign">
        <div class="row">
            <div class="col-md-2 my-auto">
                <p class="titulo" data-aos="fade-up">WEBSITES</p>
                <p>Últimos Projetos</p>
            </div>
            <div class="col-md-10 my-auto">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-2 nopadding"> <a href="images/wd_imoveisfabiana.jpg" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_imoveisfabiana.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_miltonrego.jpg" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_miltonrego.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_aben.jpg" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_aben.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_croaciamc.jpg" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_croaciamc.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_estafacil.jpg" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_estafacil.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_comapizza.jpg" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_comapizza.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-2 nopadding"> <a href="images/wd_eurotruck.png" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_eurotruck.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_midiacenter.png" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_midiacenter.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/wd_jfaramados.png" data-toggle="lightbox" data-gallery="wd"> <img src="images/wd_jfaramados.png" class="img-fluid yespadding" alt="Web Design"> </a> </div>
                        <div class="col-md-2 nopadding"></div>
                        <div class="col-md-2 nopadding"></div>
                        <div class="col-md-2 nopadding"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>...Além de muitos outros trabalhos em serviços prestados por agências como terceirizado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="desenvolvimentoweb">
        <div class="row">
            <div class="col-md-2 my-auto">
                <p class="titulo" data-aos="fade-up">DESENVOLVIMENTO WEB</p>
                <p>Últimos Projetos</p>
            </div>
            <div class="col-md-10 my-auto">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-2 nopadding"> <a href="images/dev_crm.jpg" data-toggle="lightbox" data-gallery="dev"> <img src="images/dev_crm.png" class="img-fluid yespadding" alt="Desenvolvimento Web"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dev_guias.jpg" data-toggle="lightbox" data-gallery="dev"> <img src="images/dev_guias.png" class="img-fluid yespadding" alt="Desenvolvimento Web"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dev_monstros.jpg" data-toggle="lightbox" data-gallery="dev"> <img src="images/dev_monstros.png" class="img-fluid yespadding" alt="Desenvolvimento Web"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dev_mural.jpg" data-toggle="lightbox" data-gallery="dev"> <img src="images/dev_mural.png" class="img-fluid yespadding" alt="Desenvolvimento Web"> </a> </div>
                        <div class="col-md-2 nopadding"></div>
                        <div class="col-md-2 nopadding"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>...Além de muitos outros trabalhos desenvolvidos. Entre em contato para saber mais</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="designgrafico">
        <div class="row">
            <div class="col-md-2 my-auto">
                <p class="titulo" data-aos="fade-up">DESIGN</p>
                <p>Últimos Projetos</p>
            </div>
            <div class="col-md-10 my-auto">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-2 nopadding"> <a href="images/dg_imoveisfabiana.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_imoveisfabiana.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_pontocar.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_pontocar.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_dihelena.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_dihelena.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_impactrue.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_impactrue.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_jfaramados.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_jfaramados.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_lincoln.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_lincoln.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-2 nopadding"> <a href="images/dg_waraduu.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_waraduu.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_warrior.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_warrior.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2 nopadding"> <a href="images/dg_waywarrior.png" data-toggle="lightbox" data-gallery="dg"> <img src="images/dg_waywarrior.png" class="img-fluid yespadding" alt="Design Gráfico"> </a> </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sobre">
        <div class="row">
            <div class="col-md-2 my-auto">
                <p class="titulo" data-aos="fade-up">SOBRE</p>
            </div>
            <div class="col-md-3 my-auto"> <img src="images/felipe.png" class="img-fluid" data-aos="zoom-in"> </div>
            <div class="col-md-7 my-auto">
                <p>Prossigo na eterna busca em descobrir as melhores maneiras de desenvolver softwares, definir processos e gerenciar equipes. Sou prestativo, focado e de fácil relacionamento. Iniciei a carreira como designer gráfico e web e há mais de 20 anos carrego comigo a paixão pelo front-end e back-end na área de desenvolvimento. Constantemente busco aumentar meu know-how para ser capaz de entregar produtos e serviços que realmente possam fazer a diferença na vida das pessoas.</p>
                <hr style="color: #aba8ad;">
                <h5>Minhas ferramentas:</h5>
                <ul>
                    <li>HTML/CSS/Javascript</li>
                    <li>PHP/MySQL/SQL</li>
                    <li>Bootstrap</li>
                    <li>Codeigniter</li>
                    <li>Adobe: Photoshop/Illustrator/Premiere</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="row">
            <div class="col-md-2 my-auto">
                <p class="titulo" data-aos="fade-up">CONTATO</p>
            </div>
            <div class="col-md-8 my-auto">
                <form name="formulario" id="formulario" action="contato.php" method="POST"> <input type="text" class="form-control yespadding" id="nom" placeholder="Nome Completo" name="nome" required> <input type="text" class="form-control yespadding" id="tel" placeholder="Telefone" name="telefone"> <input type="email" class="form-control yespadding" id="ema" placeholder="Email" name="email" required> <textarea class="form-control yespadding" id="men" rows="5" name="mensagem" placeholder="Deixe a sua mensagem" required></textarea> <button type="submit" name="submit" class="btn btn-block btn-success yespadding" onclick="return js_validar()">Enviar</button> </form>
            </div>
            <div class="col-md-2 my-auto"> <a href="https://www.linkedin.com/in/lipsaraiva/" target="_blank"> <img src="images/linkedIn.png" class="img-fluid" style="max-height: 80px;"> </a> </div>
        </div>
    </section> <!-- Optional JavaScript --> <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/ekko-lightbox.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/aos.settings.js"></script>
    <script>
        //Config do lightbox $(document).on('click', '[data-toggle="lightbox"]', function(event) { event.preventDefault(); $(this).ekkoLightbox(); }); //Config do scroll para o topo $(window).scroll(function() { if ($(this).scrollTop() >= 50) { $('#return-to-top').fadeIn(200); } else { $('#return-to-top').fadeOut(200); } }); //Config do scroll para o topo $('#return-to-top').click(function() { $('body,html').animate({ scrollTop : 0 }, 500); }); 
    </script>
</body>

</html>