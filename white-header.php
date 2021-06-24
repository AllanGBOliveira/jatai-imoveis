<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site, Base">
    <title>Jataí Imobiliária</title>
    <link rel="apple-touch-icon" sizes="57x57" href="imgs/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imgs/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imgs/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imgs/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imgs/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imgs/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imgs/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imgs/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="imgs/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imgs/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imgs/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="libs/bootstrap-5.0.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libs/fancybox-3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="libs/swiper-6.6.2/swiper-bundle.min.css">
    <link rel="preload prefetch" href="fonts/Poppins-Regular.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload prefetch" href="fonts/Poppins-Regular.woff2" as="font" type="font/woff2"
        crossorigin="anonymous" />
    <link rel="preload prefetch" href="fonts/Poppins-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload prefetch" href="fonts/Poppins-Bold.woff" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<section class="banner" role="banner">
        <div class="swiper-banner swiper-container">
            
            <div class="swiper-wrapper">
                <a class="swiper-slide" href="#">
                    <picture>
                        <source media="(max-width: 767px)" data-srcset="imgs/banners/banner-01-m.jpg">
                        <img data-src="imgs/banners/Layer 1.png" class="img-cover swiper-lazy" alt="Banner 01">
                    </picture>
                    <div class="swiper-lazy-preloader"></div>
                </a>
                <a class="swiper-slide" href="#">
                    <picture>
                        <source media="(max-width: 767px)" data-srcset="imgs/banners/banner-02-m.jpg">
                        <img data-src="imgs/banners/Layer 2.png" class="img-cover swiper-lazy" alt="Banner 02">
                    </picture>
                    <div class="swiper-lazy-preloader"></div>
                </a>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </section>
    <header id="header" class="white-nav">
        <button class="skip-link fixed-top" id="skipForContent" onClick="skipLinkMain()">Pular para o conteúdo
            principal</button>
        <nav class="navbar navbar-expand compensate-for-scrollbar">
            <div class="container">
                <a href="index.php" class="logo">
                    <img srcset="imgs/logo.png, imgs/logo-2x.png 2x" src="imgs/logo-2x.png" alt="Site Base" />
                </a>
                <ul id="#nav" class="nav navbar-nav">
                    <li id="#index"><a href="index.php">Home</a></li>
                    <li id="#page"><a href="page.php">Quem Somos</a></li>
                    <li id="#blog" ><a href="blog.php">Nosso Catálogo</a></li>
                    <li id="#register"><a href="contact.php">Cadastre Seu
                            Imóvel</a></li>
                    <li id="#contact"><a href="contact.php">Entre em Contato</a></li>
                    <li id="#client" ><a  href="#" class="disabled" >Área do Cliente</a></li>
                </ul>

                <button id="menu-toggle" onClick="toggleMenu()" aria-expanded="false" aria-label="Abrir menu lateral">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <div id="wrapper">
        <div id="overlay"></div>
        <div id="sidebar-menu">
            <button class="close-menu" onclick="toggleMenu()" aria-label="Fechar menu lateral">
                <i class="fas fa-times"></i>
            </button>
            <ul class="sidebar-nav" id="submenu-mobile" tabindex="-1" aria-label="Menu lateral">
                <li class="btn-search">
                    <form action="search.php" method="GET" role="search">
                        <input type="search" id="search-mobile" name="search" placeholder="Pesquisar"
                            aria-label="Pesquisar" required />
                        <button type="submit" aria-label="Buscar"><i class="fas fa-search"></i></button>
                    </form>
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="page.php">Quem Somos</a></li>
                <li><a href="blog.php">Nosso Catálogo</a></li>
                <li><a href="contact.php">Cadastre Seu Imóvel</a></li>
                <li><a href="contact.php">Entre em Contato</a></li>
                <li><a  href="contact.php" class="disabled">Área do Cliente</a></li>
                <li class="social">
                    <a href="https://facebook.com/" title="Facebook" target="_blank" rel="noreferrer"
                        aria-label="Acesse nossa página no Facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com" title="Twitter" target="_blank" rel="noreferrer"
                        aria-label="Acesse nosso perfil no Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" title="Instagram" target="_blank" rel="noreferrer"
                        aria-label="Acesse nosso perfil no Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/" title="Linkedin" target="_blank" rel="noreferrer"
                        aria-label="Acesse nosso perfil no LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <!--
                        <a href="https://api.whatsapp.com/send?phone=5542999999999" title="Whatsapp" target="_blank" rel="noreferrer" aria-label="Envie-nos uma mensagem atráves do WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        -->
                </li>
            </ul>
        </div>
