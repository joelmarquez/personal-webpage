@extends('layouts.template')

@section('title', '' . $title)

@section('content')

    <!--.preloader-->
    <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
    <!--/.preloader-->

    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/1.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Hola! Soy <span>JOEL MARQUEZ</span></h1>
                        <p class="animated fadeInRightBig">Desarrollador Web Fullstack</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">¿En que te puedo ayudar?</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/2.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">¿Necesitas un sitio web moderno?</h1>
                        <p class="animated fadeInRightBig">Con las ultimas tendencias en diseño y experiencia de usuario</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="https://wa.me/573143351528/?text=tu%20Hola!" target="_blank">Comunicate ya</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/3.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig"> ¿Quieres vender online? </h1>
                        <p class="animated fadeInRightBig">Desarrollo tiendas online, y sistemas de ventas integrados</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="https://calendly.com/joelmarquez/15min?month=2022-02" target="_blank">Agenda una Cita</a>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

            <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

        </div><!--/#home-slider-->

        <div class="main-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php $_SERVER['DOCUMENT_ROOT']?>"
                    <h1><img class="img-responsive" src="images/logo.png" alt="Joel Marquez - Desarrollador Web"></h1>
                    </a>                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">                 
                    <li class="scroll active"><a href="#home">Home</a></li>
                    <li class="scroll"><a href="#services">Servicios</a></li> 
                    <li class="scroll"><a href="#about-us">Quien soy</a></li>                     
                    <li class="scroll"><a href="#portfolio">Portafolio</a></li>
                    <li class="scroll"><a href="#review">Review</a></li>
                    <li class="scroll"><a href="#blog">Canal Youtube</a></li>
                    <li class="scroll"><a href="#contact">Contactos</a></li>       
                    </ul>
                </div>
            </div>
        </div><!--/#main-nav-->
    
    </header><!--/#home-->

    <section id="services">
        <div class="container">
            <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2>Mis Servicios</h2>
                        <p>Decide como quieres empezar. <br> Te ofresco lo necesario para comenzar u optumizar tu negocio digital.</p>
                    </div>
                </div> 
            </div>
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="service-info">
                            <h3>Asesorias</h3>
                            <p>Aún no sabes por donde empezar, necesitas precencia digital, o llegar a mas público, puedo proporcionarte ideas acerca del camino a seguir.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-google"></i>
                        </div>
                        <div class="service-info">
                            <h3>Google Adword</h3>
                            <p>Llega al público objetivo que realmente quieres. Aparece en los primeros lugares de Google y destaca tu negocio.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="service-icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="service-info">
                            <h3>Soporte Post Desarrollo</h3>
                            <p>Todo aplicativo que te entregue, tienen soporte técnico garantizado mientras esté en uso, no abandono a mis clientes. </p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="service-info">
                            <h3>Desarrollo Web Profesional</h3>
                            <p>He realizado muchos sitios webs, por lo que ofresco mi experiencia en el estilo y tipo de sitio web que realmente necesitas.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                        <div class="service-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="service-info">
                            <h3>Rediseño y Optimización</h3>
                            <p>¿Tienes un sitio web o app ya obsoleta? Es hora de adaptarla a los nuevos tiempos y hacer que tu plataforma se adapte a las nuevas tecnologías.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                        <div class="service-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="service-info">
                            <h3>Podcasting</h3>
                            <p>Puedo adaptar y producir tu contenido de valor, para su difusión a través de las diferentes plataformas de podcast, y llegar a otros públicos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/#services-->

    <section id="about-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>Quien es Joel Márquez</h2>
                        <p>Soy un desarrollador web, listo para asumir nuevos retos para facilitarte el camino al mundo digital. Tengo mas de 15 años de experiencia en el mundo digital, he puesto a prueba mis habilidades en muchos proyectos, los cuales me han ayudado a obtener la experticia y el conocimiento con el que te puedo ayudar hoy.</p>
                        <p> Trabajo en equipo, porque es imposible saberlo todo. </p>
                        <p> No solamente creo cosas, tambien resuelvo problemas digitales. </p>
                        <p> Puedo adaptarme a la tecnologia que se necesite usar. </p>
                        <p> Puedo gestionar proyectos desde cero. </p>
                        <p> Por lo general trabajo en Home Office, pero puedo desplazarme a lugares. </p>
                        <p> Nunca paro de aprender. </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <!-- <img src="images/joel_marquez.png" width="330px"> -->
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#about-us-->

    {{-- Portafolio --}}
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Algunos Trabajos Realizados</h2>
                    <p>Aquí una muestra de como he ayudado a diferentes tipos de empresas y organismos, a poder tener su sitio web optimo, y adaptado a los nuevos tiempos.</p>
                </div>
            </div> 
        </div>
        <div class="container-fluid">
            
                <div class="col-sm-3">
                    <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="folio-image">
                            <img class="img-responsive" src="images/portfolio/ambientes_de_hogar.jpg" alt="Ambientes de Hogar">
                        </div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="overlay-text">
                                    <div class="folio-info">
                                        <h3>Ambientes de Hogar</h3>
                                        <p>Fabrica de Muebles y Ventas al Detal de Mobiliario</p>
                                    </div>
                                    <div class="folio-overview">
                                        <!-- <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span> -->
                                        <span class="folio-link"><a href="https://www.ambientesdehogar.com" target="_blank"><i class="fa fa-link"></i></a></span>
                                        <span class="folio-expand"><a href="images/portfolio/Ambientes-de-hogar.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/clinica-angel-de-vida.jpg" alt="Clínica Angel de Vida">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Angel de Vida</h3>
                                    <p>Clínica Angel de Vida ubicada en Houston - Texas</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://www.angeldevida.com/" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/angeldevida-compendio.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/ibericos.jpg" alt="Ibericos Diaz y Serrano">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Ibéricos Diaz y Serrano</h3>
                                    <p>Tienda Online Productos Ibéricos</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a  href="https://ibericosdys.com/" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/ibericos.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/malagaCamper.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                        <h3>Málaga Camper</h3>
                                    <p>Camperizaciones / Personalización de furgonetas</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://malagacamper.es/" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/malagaCamper.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Segunda fila --}}
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/todoCanon.jpg" alt="Todo Canon">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                        <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Todo Canon</h3>
                                    <p>Distribuidor oficial de equipos fotograficos Canon para latinoamerica</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://todocanon.com" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/todoCanon.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/sistema-cupon.jpg" alt="sistema de cupón de descuento">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Sistema de Cupon de Descuentos</h3>
                                    <p>Muebleria por departamento ubicada en Bogotá - Colombia</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://www.ambientesdehogar.com/midescuento/" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/sistema-cupon.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/grupo-dotcom-podcast.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Grupo Dotcom</h3>
                                    <p>Producción y diseño de sonido para el podcast de la empresa</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://www.grupodotcom.com/podcast/" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/grupo-dotcom-podcast.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/tiendas-industriales.jpg" alt="Tiendas Industriales">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Tiendas Industriales</h3>
                                    <p>Comercializadora al mayot de elementos para la industria</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://www.tiendasindustriales.com" ><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/tiendas-industriales.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            {{-- Tercera Fila --}}
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="1100ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/hosting.jpg" alt="Hosting a Medida">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                        <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Hosting a Medida</h3>
                                    <p>Hosting para emprendedores y pequeñas empresas</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://hostingamedida.com" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/hosting.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1200ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/colchones-moon.jpg" alt="Colchones Moon">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Colchones Moon</h3>
                                    <p>Almacenes dedicados a la venta de colchones para el hogar</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://www.colchonesmoon.com" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/colchones-moon.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="1300ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/grupodamark.jpg" alt="Grupo Damark">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Grupo Damark</h3>
                                    <p>Grupo de Empresas dedicadas a diferentes <br> rubros de la tecnología</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a href="https://www.grupodamark.com" target="_blank"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="images/portfolio/grupodamark.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/disponible.png" alt="Disponible">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Aquí puede estar tu sitio web</h3>
                                    <p></p>
                                </div>
                                <div class="folio-overview">
                                    {{-- <span class="folio-link"><a href="https://www.tiendasindustriales.com" ><i class="fa fa-link"></i></a></span> --}}
                                    <span class="folio-expand"><a href="images/portfolio/disponible.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div id="portfolio-single-wrap">
                <div id="portfolio-single">
                </div>
            </div><!-- /#portfolio-single-wrap -->
        </div>
    </section><!--/#portfolio-->

        <section id="review">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                        <h2>Lo que opinan mis clientes</h2>
                        <p><a href="https://www.google.com/maps/place/Webmaster+Joel+M%C3%A1rquez/@4.6482837,-74.2478938,11z/data=!4m7!3m6!1s0xfd2529d973f4033:0xef07bd21670386c8!8m2!3d4.6482976!4d-74.107807!9m1!1b1" target="_blank"><img src="images/google-verified-reviews.png" width="300px"></a></p>
                    </div>
                </div>
                
                <div class="team-members">
                <div class="row">
                    <div class="heading text-center col-lg-12 wow fadeInUp">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p>Excelente Trabajo, muy ordenado.</p>
                                                <small>Pedro Eslava</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p>Joel es un profesional muy capacitado y honesto en todos los aspectos, he realizado con él varios trabajos conjuntos y aún hoy en día seguimos llevando proyectos con gran éxito. lo recomiendo ampliamente.</p>
                                                <small>Ricardo Aponte</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p>Excelente profesional, tiene la habilidad de entender los requerimientos y ofrecer diferentes opciones indicando los pros y contras, para que el cliente pueda elegir la opción que más le convenga.</p>
                                                <small>Julio Perez</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 4 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p>Totalmente recomendable.. después de trabajar con el en 2 trabajos puedo decir que es un gran profesional. Destaca por su gran organización y por respetar en todo momento plazos. Diseña web que no tienen nada que ver con las habituales.</p>
                                                <small>Alejandro Diaz</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 5 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p>Agradecido al 100% y más ! Un servicio de alto nível, el seguimiento una vez culminados los trabajos solicitados, nos generan la confianza que necesitamos, la tranquilidad que como empresa buscamos, y seguimos trabajando en nuevos proyectos!!</p>
                                                <small>Toni Heredia</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            <!-- Quote 6 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Persona responsable y muy profesional.</p>
                                            <small>Miguel ramos</small>
                                        </div>
                                    </div>
                                </blockquote>
                        
                                    <!-- Bottom Carousel Indicators -->
                                    <!-- <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/user.png" alt="Pedro Eslava">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/user.png" alt="Ricardo Aponte">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/user.png" alt="Julio Perez">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="images/user.png" alt="Tony Heredia">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="4"><img class="img-responsive" src="images/user.png" alt="Alejandro Diaz">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="5"><img class="img-responsive" src="images/user.png" alt="Miguel Ramos">
                                        </li>
                                    </ol> -->
                                    <!-- Carousel Buttons Next/Prev -->
                                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>  
        </section><!--/#review-->

        <!-- <section id="features" class="parallax">
        <div class="container">
            <div class="row count">
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <i class="fa fa-user"></i>
                <h3 class="timer">4000</h3>
                <p>Happy Clients</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <i class="fa fa-desktop"></i>
                <h3 class="timer">200</h3>                    
                <p>Modern Websites</p>
            </div> 
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
                <i class="fa fa-trophy"></i>
                <h3 class="timer">10</h3>                    
                <p>WINNING AWARDS</p>
            </div> 
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                <i class="fa fa-comment-o"></i>                    
                <h3>24/7</h3>
                <p>Fast Support</p>
            </div>                 
            </div>
        </div>
        </section> -->
        <!--/#features-->

        <section id="twitter" class="parallax">
            <div>
                <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div>
                                <i class="fa fa-building fa-4x"></i>
                                <h4>Empresas para las que he trabajado como desarrollador</h4>
                            </div>
                            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                                    </div> -->
                                    <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <p><img src="images/company/copa-airlines.jpg"></p>
                                    </div>
                                    <div class="item">
                                        <p><img src="images/company/canon.jpg"></p>
                                    </div>
                                    <div class="item">                                
                                        <p><img src="images/company/thomsailor.jpg"></p>
                                    </div>
                                    <div class="item">                                
                                        <p><img src="images/company/grupo-dotcom.jpg"></p>
                                    </div>
                                    <div class="item">                                
                                        <p><img src="images/company/grupo-damark.jpg"></p>
                                    </div>
                                    <div class="item">                                
                                        <p><img src="images/company/techbtc.jpg"></p>
                                    </div>
                                    <div class="item">                                
                                        <p><img src="images/company/casatoro.jpg"></p>
                                    </div>
                                    <div class="item">                                
                                        <p><img src="images/company/ambientesdehogar.jpg"></p>
                                    </div>
                                </div>                        
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#photografy background-->

        <section id="blog">
            <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                            <h2>Video Blog Posts</h2>
                            <p>En mi canal de youtube te ofresco contenido referente al aprendizaje de todas las tecnologias para realizar 
                                sitios para la internet, e indago en todas las tecnologias que nos faciliten el día a día.
                            </p>
                        </div>
                    </div>
                <div class="blog-posts">
                    <div class="row">
                            {{-- Videos desde API youtube --}}
                            @include('youtube');   
                    </div>
                </div>
            </div>
        </section><!--/#blog-->

        <section id="contact">
            <!-- <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div> -->
            <div id="contact-us" class="parallax">
                <div class="container">
                        <div class="row">
                            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Mandame un mensaje</h2>
                            <p>Te responderé a la brevedad, es decir el mismo dia en horarios de oficina. </p>
                            </div>
                        </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                {{-- <form id="main-contact-form" name="contact-form" method="post" action="{{ route('contactanos.store') }}> --}}
                                <form  name="contact-form" method="post" action="sendmail">
                                    @csrf
                                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Escribe tu mensaje" required="required"></textarea>
                                    </div>                        
                                    <div class="form-group">
                                        {{-- <div class="g-recaptcha" data-sitekey="6LfA06QaAAAAAI-X9DKHatxp0mLFz_mLfejaMN3u"></div>  --}}
                                        <div class="g-recaptcha" data-sitekey="6LfA06QaAAAAAI-X9DKHatxp0mLFz_mLfejaMN3u" data-callback="correctCaptcha"></div>
                                        <button type="submit" name="submitForm" id="btn-validate" class="btn-submit">Enviar Formulario</button>
                                    </div>
                                </form>  
                                <!-- Mensaje de sesion-->
                            @if (session('info'))
                                <script>
                                    alert("{{ session('info') }}")
                                </script>
                            @endif 
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p>Desarrollo sitios para clientes de, Venezuela, Colombia, España, y Estados Unidos. </p>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> <span> Dirección:</span> Bogotá - Colombia</li>
                                        <li><i class="fa fa-phone"></i> <span> Móvil:</span> +57 3143351528  </li>
                                        <!-- <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@oxygen.com</a></li> -->
                                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.joelmarquez.net</a></li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                </div>
            </div>        
        </section><!--/#contact-->
@endsection