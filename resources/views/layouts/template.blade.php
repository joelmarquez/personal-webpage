<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sitio web oficial de Joel Marquez. Sitios webs modernos y con las ultimas tecnologias">
        <meta name="keywords" content="desarrollo web, desarrollo de apps, servicio de hosting, consultoria web, e-commerce, tiendas online, programacion"/>
        <meta property="og:url" content="https://joelmarquez.net" />
        <meta property="og:title" content="Joel Marquez | Desarrollador Web Profesional" />
        <meta property="og:description" content="Sitio web oficial de Joel Marquez. Sitios webs modernos y con las ultimas tecnologias" />
        <meta property="og:image" content="https://joelmarquez.net/images/Simbolo.png" />
        <meta name="author" content="">
        <title>@yield('title')</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!-- Javascript -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/mousescroll.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        <!-- Javascript -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-19733114-21"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-19733114-21');
            </script>
        <!-- End Google Analitycs -->

        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-W6XSDL5');</script>
        <!-- End Google Tag Manager -->

        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6XSDL5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

            @yield('content')
    
        @section('footer')
            <footer id="footer">
                <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="container text-center">
                        <div class="footer-logo">
                            <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="Desarrollador Joel Marquez"></a>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="https://www.facebook.com/soywebmasterdelmundo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com/joelimg" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/joelmarquezp" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="https://youtube.com/joelmarquez" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="whatsapp" href="https://wa.me/+573143351528/?text=Hola!%20Joel%20" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>&copy; Todos los derechos reservados 2015 - <?php echo date("Y"); ?> </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="pull-right">Hospedado por <a href="http://grupodotcom.com" target="_blank">Grupo DotCom C.A</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        @show
    </body>
</html>