<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sitio web oficial de Joel Marquez. Sitios webs modernos y con las ultimas tecnologias">
        <meta name="keywords" content="desarrollo web, desarrollo de apps, servicio de hosting, consultoria web, e-commerce, tiendas online, programacion"/>
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
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- Javascript -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>

    <body>
            @yield('content')
    
        @section('footer')
            <footer id="footer">
                <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="container text-center">
                        <div class="footer-logo">
                            <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
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