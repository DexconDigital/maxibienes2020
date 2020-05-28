<!DOCTYPE html>
<?php require 'api_php/config.php' ?>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->
<?php
require_once("js/bd_function.php");
$con = Conect();
$qry = "SELECT * FROM asesores";
$sql = mysqli_query($con, $qry);
$res =  mysqli_fetch_array($sql);

?>


<head>
    <meta charset="utf-8" />

    <!-- Page Title -->
    <?php $page = "Sede Colores";
    include 'SEO/metaEtiquetas.php'; ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-136598713-1');
    </script>
    <!-- Mobile Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host ?>images/favicon.png" />
    <link rel="apple-touch-icon" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon-114x114.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="<?php echo $url_host ?>css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link href="<?php echo $url_host ?>css/tab.css" rel="stylesheet" />
    <link href="<?php echo $url_host ?>css/style.css" rel="stylesheet" />
    <link href="<?php echo $url_host ?>css/style2.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.carousel.min.css">

    <!-- Modernizr -->
    <script src="<?php echo $url_host ?>js/modernizr-2.8.1.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap"></script>
</head>

<body>
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN HEADER -->
        <header id="header">
            <div id="top-bar">
                <div class="container">
                    <div class="row header-ppal">

                    </div>
                </div>
            </div>

            <div id="nav-section">
                <div class="container">
                    <div class="row menu-ppal">
                        <?php include 'include/menu.php' ?>
                    </div>
                </div>
            </div>
        </header>
        <div class="parallax parallax-banner colored-bg pattern-bg" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Maxibienes, Sede Colores</h1>

                        <ul class="breadcrumb">
                            <li><a href="./">Inicio</a></li>
                            <li><a href="">Sede Colores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="section-title">Bienvenido a Nuestra sede Colores</h1>
                    </div>
                    <!-- Mapa y contacto -->
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-10 col-lg-8">
                                <?php include 'mapas-sedes/sede-colores.php' ?>
                            </div>
                            <div class="col-sm-12 col-sm-10 col-lg-4" style="font-size: 1.3rem;">
                                <h3 class="titulo-sedes mb-4">Informacion de Contacto</h3>
                                <p><i class="fa fa-map-marker"></i> Calle 53 Nº 71 - 11 Local 109, Mall Colores</p>
                                <p><i class="fa fa-phone"></i> <a href="tel:3006575400">300 657 5400</a></p>
                                <p><i class="fa fa-envelope"></i> <a href="mailito:arrendamientoscolores@maxibienes.com">arrendamientoscolores@maxibienes.com</a></p>
                                <p><i class="fa fa-calendar"></i> Lunes a Viernes: de 8:00 a.m. </p> a 6:00 p.m. Jornada Continua
                                <p>Sábados: de 9:00 a.m. a 1:00 p.m</p>
                            </div>
                        </div>
                        <!-- tabs -->
                        <div class="col-sm-12">
                            <div class="print-tab" data-tab-id="2">
                                <h2 class="directorio">Directorio</h2>
                                <ul class="print-tab-menu" id="nuevo-menu-tab">

                                    <li data-tab-menu="tab19" id="li-opciones"><a>Arriendos</a></li>
                                    <li data-tab-menu="tab20" id="li-opciones"><a>Ventas</a></li>
                                    <li data-tab-menu="tab21" id="li-opciones"><a>Administrativos
                                        </a></li>

                                </ul>
                                <div class="print-tab-content">
                                    <div data-tab-content="tab18" style="display: none;	">
                                    </div>
                                    <div data-tab-content="tab19">
                                        <ul id="agencies-results" class="agencies-list">
                                            <?php
                                            $qry3 = "SELECT * FROM asesores";
                                            $sql3 = mysqli_query($con, $qry3);
                                            while ($res3 = mysqli_fetch_array($sql3)) {
                                                if ($res3["sede"] == 2 && $res3["departamento"] == 2) {
                                                    echo '<li class="col-md-6">

                                                                <div class="info">
                                                                    <center class="contenedor-img-tab">
                                                                    <img src="' . $url_host . 'maxibienes-admin/admin/' . $res3["foto"] . '" class="img-sedes"></center>
                                                                    <h2></h2>
                                                                    <ul class="contact-us">
                                                                        <li><a href="tel:' . $res3["celular"] . '"><i class="fa fa-phone"></i>
                                                                        ' . $res3["celular"] . '</a></li>
                                                                        <li><a href="mailto:' . $res3["correo"] . '"><i class="fa fa-envelope"></i>
                                                                                ' . $res3["correo"] . '</a></li>
                                                                    </ul>


                                                                </div>
                                                            </li>';
                                                }
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                    <div data-tab-content="tab20">
                                        <?php
                                        $qry4 = "SELECT * FROM asesores";
                                        $sql4 = mysqli_query($con, $qry4);
                                        while ($res4 = mysqli_fetch_array($sql4)) {
                                            if ($res4["sede"] == 2 && $res4["departamento"] == 1) {
                                                echo '<li class="col-md-6">
                                                                <div class="info">
                                                                    <center class="contenedor-img-tab">
                                                                    <img src="' . $url_host . 'maxibienes-admin/admin/' . $res4["foto"] . '" class="img-sedes"></center>
                                                                    <h2></h2>



                                                                    <ul class="contact-us">
                                                                        <li><a href="tel:' . $res4["celular"] . '"><i class="fa fa-phone"></i>
                                                                        ' . $res4["celular"] . '</a></li>
                                                                        <li><a href="mailto:' . $res4["correo"] . '"><i class="fa fa-envelope"></i>
                                                                                ' . $res4["correo"] . '</a></li>
                                                                    </ul>


                                                                </div>
                                                            </li>';
                                            }
                                        }
                                        ?>

                                    </div>
                                    <div data-tab-content="tab21">
                                        <?php
                                        $qry5 = "SELECT * FROM asesores";
                                        $sql5 = mysqli_query($con, $qry5);
                                        while ($res5 = mysqli_fetch_array($sql5)) {
                                            if ($res5["sede"] == 2 && $res5["departamento"] == 3) {
                                                echo '<li class="col-md-6">


                                                                <div class="info">
                                                                    <center class="contenedor-img-tab">
                                                                    <img src="' . $url_host . 'maxibienes-admin/admin/' . $res5["foto"] . '" class="img-sedes"></center>
                                                                    <h2></h2>



                                                                    <ul class="contact-us">
                                                                        <li><a href="tel:' . $res5["celular"] . '"><i class="fa fa-phone"></i>
                                                                        ' . $res5["celular"] . '</a></li>
                                                                        <li><a href="mailto:' . $res5["correo"] . '"><i class="fa fa-envelope"></i>
                                                                                ' . $res5["correo"] . '</a></li>
                                                                    </ul>


                                                                </div>
                                                            </li>';
                                            }
                                        }
                                        ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Propiedades Destacadas Sede Colores</h2>
                        <div class="container">
                            <div class="row ">
                                <div class="col-sm-12 col-md-10 col-lg-12" id="columna-destacadas">
                                    <div class="owl-carousel owl-theme grid-style1 clearfix" id="propiedades_destacadas">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <a href="<?php echo $url_host ?>/lista-de-inmuebles-sede/colores/" class="btn btn-danger ml-4 mt-4">Ver todos los inmuebles de la sede</a>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="main">
                    <h2 class="section-title">Formulario de Contacto</h2>
                    <form action="<?php echo $url_host ?>js/mailColores.php" method="POST">
                        <div class="col-sm-12">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" class="form-control fromName" required>
                            <input type="number" name="telefono" id="telefono" placeholder="Teléfono/Celular" class="form-control  fromEmail" required>
                            <input type="email" name="email" id="email" placeholder="Correo electrónico" class="form-control  fromEmail" required>
                            <input type="text" name="asunto" placeholder="Asunto" id="asunto" class="form-control required subject" required>
                            <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control" required></textarea>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="terms" required> Confirmo que he leído, entendido y acepto el <a href="images/Politicas_Tratamiento_Datos.pdf" target="_blank">Manual de políticas Web</a> , <a href="images/Aviso_de_Privacidad.pdf" target="_blank">Aviso
                                        de
                                        Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de
                                        consentimiento web </a>
                                </label>
                            </div>
                        </div>

                        <div class="center">
                            <button type="submit" class="btn btn-default-color btn-lg submit_form"><i class="fa fa-envelope"></i>Enviar
                                Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <?php include  'include/footer.php' ?>
        </section>
    </div>
    <!-- END WRAPPER -->
    <div id="stop" class="scrollTop">

    </div>

    <!-- Libs -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $url_host ?>js/common.js"></script>
    <script src="<?php echo $url_host ?>js/tabs.js"></script>
    <script src="<?php echo $url_host ?>js/menu.js"></script>
    <script src="<?php echo $url_host ?>js/top.js"></script>
    <script src="<?php echo $url_host ?>js/email.js"></script>
    <script src="<?php echo $url_host ?>js/variables.js"></script>
    <script src="<?php echo $url_host ?>js/scripts.js"></script>

    <script type="text/javascript" src="<?php echo $url_host ?>js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.theme.default.min.css">
    <script src="<?php echo $url_host ?>js/destacadas-colores.js"></script>
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '957165454489599',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.11'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="957764824286605" theme_color="#fa3c4c" logged_in_greeting="Hola! Como te puedo ayudar?" logged_out_greeting="Hola! Como te puedo ayudar?">
    </div>


    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-40159437-9', 'auto');
        ga('send', 'pageview');
    </script>


</body>

</html>