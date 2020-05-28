<!DOCTYPE html>
<html lang="es">
<!--<![endif]-->
<?php
require_once("js/bd_function.php");
require_once("js/noticesJSON.php");
require 'api_php/config.php';
$con = Conect();
$qry = "SELECT * FROM imagenes";
$sql = mysqli_query($con, $qry);
?>

<head>

	<?php $page = "";
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
	<!-- Page Title -->
	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host ?>images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon-114x114.png" />

	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

	<!-- Google Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<link href="<?php echo $url_host ?>css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url_host ?>rs-plugin/css/settings.css" media="screen" />
	<link href="<?php echo $url_host ?>css/style.css" rel="stylesheet" />
	<link href="<?php echo $url_host ?>css/pop-up.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url_host ?>css/style2.css">
	<link rel="stylesheet" href="<?php echo $url_host ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $url_host ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="">

	<style>
		.wrap {
			max-width: 500px;
			margin: 0 auto;
		}

		.glide__slide {
			border: 1px solid black;
			height: 100px;
			line-height: 100px;
			text-align: center;
		}
		.color_negro {
			color: black;
			margin-left: 8%;
			position: fixed;
		}
		.color_negro2 {
			color: black;
			margin-left: 13%;
			position: fixed;
		}

		.img-responsive_modal {
			display: block;
			max-width: 53%;
			height: auto;
			margin-left: 42%;

		}
	</style>


	<!-- Modernizr -->

	<script src="<?php echo $url_host ?>js/modernizr-2.8.1.min.js"></script>


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
		<!-- END HEADER -->
		<!-- BEGIN HOME SEARCH SECTION -->
		<div class="container-fluid separador">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php
					while ($res = mysqli_fetch_array($sql)) {
						if ($res["zona"] == 1) {
							echo '
							<div class="item">
								<img src="' . $url_host . 'maxibienes-admin/admin/' . $res["imagen"] . '" alt="imagen del slide de presentacion de la pagina de Maxibienes"/>
							</div>
					';
						}
					}
					?>
				</div>


				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="action-box">
			<div class="container">
				<div class="row justify-content-center">

					<div id="home-search-buttons" class="col-sm-10 col-sm-offset-2" data-animation-direction="from-bottom" data-animation-delay="250" style="font-size:20px">
						<i class="fa fa-search"></i> Buscar
						<button class="btn btn-default" onclick="myFunction()">Arriendo</button>
						<button class="btn btn-default" onclick="funcionVenta()">Venta</button>
						<a href="<?php echo $url_host; ?>hipotecas"><button class="btn btn-default " onclick="funcionHipoteca()">Hipoteca</button></a>
						<button class="btn btn-default" onclick="funcionCodigo()">Buscar por código</button>
						<button class="btn btn-default" onclick="funcionSedes()">Inmuebles por Sedes</button>
					</div>
					<div id="buscador" class="col-sm-12 col-sm-offset-3 buscador1 mx-auto" data-animation-direction="from-bottom" data-animation-delay="250">
						<div id="dis-buscador" class="input-group">
							<div class="col-sm-3">
								<select class="form-control ciudad" id="ciudad_arriendo" data-placeholder="Ciudad">
									<option value="0">Ciudad</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select class="form-control zona" id="zona_arriendo" data-placeholder="Barrio">
									<option value="0">Barrio</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select class="form-control inmueble" id="inmueble_arriendo" data-placeholder="Tipo de Inmueble">


								</select>
							</div>

							<div class="col-sm-3">
								<select class="form-control precio" i id="precio_arriendo" data-placeholder="Precio Minimo">
									<option value="0">Precio</option>

									<option value="1">$400.000 a $600.000</option>
									<option value="2">$600.001 a $900.000</option>
									<option value="3">$900.001 a $1.200.000</option>
									<option value="4">$1.200.001 a $1.500.000</option>
									<option value="5">$1.500.001 a $2.000.000</option>
									<option value="6">$2.000.001 a $2.500.000</option>
									<option value="7">$2.500.001 a $3.000.000</option>
									<option value="8">$3.000.001 a $3.500.000</option>
									<option value="9">$3.500.001 a $4.000.000</option>
									<option value="10">$4.000.001 a $4.500.000</option>
									<option value="11">Más de $4.500.000</option>
								</select>
							</div>
							<span class="input-group-btn">
								<button class="btn btn-default search-2" type="button">Buscar</button>
							</span>
						</div>
						<button class="btn btn-default volver-btn mt-4" onclick="volverFuncion()">Volver</button>
					</div>
					<div id="buscador" class="col-sm-12 col-sm-offset-3 buscador2 mx-auto" data-animation-direction="from-bottom" data-animation-delay="250">
						<div id="dis-buscador" class="input-group">
							<div class="col-sm-3">
								<select class="form-control ciudad" id="ciudad_venta" data-placeholder="Ciudad">
									<option value="0">Ciudad</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select class="form-control zona" id="zona_venta" data-placeholder="Barrio">
									<option value="0">Barrio</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select class="form-control inmueble" id=inmueble_venta" data-placeholder="Tipo de Inmueble">


								</select>
							</div>

							<div class="col-sm-3">
								<select class="form-control precio" id="precio_venta" data-placeholder="Precio Minimo">
									<option value="0">Precio</option>
									<option value="1">$400.000 a $10.000.000</option>
									<option value="2">$10.000.001 a $20.000.000</option>
									<option value="3">$20.000.001 a $30.000.000</option>
									<option value="4">$30.000.001 a $40.000.000</option>
									<option value="5">$40.000.001 a $50.000.000</option>
									<option value="6">$50.000.001 a $60.000.000</option>
									<option value="7">$60.000.001 a $70.000.000</option>
									<option value="8">$70.000.001 a $80.000.000</option>
									<option value="9">$80.000.001 a $90.000.000</option>
									<option value="10">$90.000.001 a $100.000.000</option>
									<option value="11">$100.000.001 a $150.000.000</option>
									<option value="12">$150.000.001 a $200.000.000</option>
									<option value="13">$200.000.001 a $250.000.000</option>
									<option value="14">$250.000.001 a $300.000.000</option>
									<option value="15">$300.000.001 a $350.000.000</option>
									<option value="16">$350.000.001 a $400.000.000</option>
									<option value="17">Más de $400.000.000</option>
								</select>
							</div>


							<span class="input-group-btn">
								<button class="btn btn-default search-3" type="button"> <i class="fa fa-search"></i> Buscar</button>
							</span>
						</div>
						<button class="btn btn-default volver-btn mt-4" onclick="volverFuncion1()">Volver</button>
					</div>
					<div id="buscador" class="col-sm-6 col-sm-offset-3 mx-auto" data-animation-direction="from-bottom" data-animation-delay="250">
						<div id="dis-buscador" class="input-group">

							<select class="form-control ciudad" data-placeholder="Ciudad">


							</select>
							<span class="input-group-btn">
								<button class="btn btn-default search-3" type="button"> <i class="fa fa-search"></i>Buscar</button>
							</span>
						</div>
						<button class="btn btn-default volver-btn mt-4" onclick="volverFuncion()">Volver</button>
					</div>
					<div id="buscador1" class="col-sm-6 col-sm-offset-3 buscador3 mx-auto" data-animation-direction="from-bottom" data-animation-delay="250">
						<div id="dis-buscador" class="input-group">

							<input type="text" placeholder="Ej: 1234" name="home_search" id="home_search" class="form-control codeInm" />
							<span class="input-group-btn">
								<button class="btn btn-default search-4" type="button"><i class="fa fa-search"></i>Buscar</button>
							</span>
						</div>
						<button class="btn btn-default volver-btn mt-4" onclick="volverFuncion2()">Volver</button>
					</div>
					<div id="buscador1" class="col-sm-6 col-sm-offset-3 buscador4 mx-auto" data-animation-direction="from-bottom" data-animation-delay="250">
						<div id="dis-buscador" class="input-group">
							<select class="form-control sedes" data-placeholder="Sede">
								<option value="">Sede</option>
							</select>
							<span class="input-group-btn">
								<button class="btn btn-default search-5" type="button"><i class="fa fa-search"></i>Buscar</button>
							</span>
						</div>
						<button class="btn btn-default volver-btn mt-4" onclick="volverFuncion3()">Volver</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 text-center div_pagos">
			<button type="button" class="btn pago " data-toggle="modal" data-target="#exampleModal">PAGOS</button>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">FORMAS DE PAGO</h5>
						<button type="button" style="margin-top: -23px;" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="col-12">
							<div  id="zona-pagos"></div>
							<div class="row">
								<div class=" col-md-6 " data-animation-direction="from-bottom" style="margin-bottom: -4%;" data-animation-delay="650">
								<a href="https://www.zonapagos.com/t_maxibienesbd/pagos.asp" target="_blanck">
										<img class="barras_tamaño" id="img-zona9"></a>
									
										<h3 class="color_negro" id="titulo9"> </h3>
									</a>
								</div>
							</div>
				</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="container-fluid">
			<h1 class="encabezado" data-animation-direction="from-bottom" data-animation-delay="50">Maxibienes, Arriendo y Venta de Inmuebles</h2>
		</div>
		<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Propiedades Destacadas de Todas Nuestras Sedes</h2>
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-10 div_img" id="columna-destacadas">
									<div class="owl-carousel owl-theme grid-style1 clearfix" id="propiedades_destacadas">

									</div>
								</div>
								<div class="col-sm-12 col-md-10 div_img" id="columna-destacadas2">
									<div class="owl-carousel owl-theme grid-style1 clearfix" id="propiedades_destacadas2">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content colored">
			<div class="container">
				<div class="row">

					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
						<div id="find_agents" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
							<h2 class="section-title">Zona Interactiva</h2>
							<div class="feature col-md-4 " data-animation-direction="from-bottom" data-animation-delay="650" onclick="openModalprop()" style="cursor: pointer;">
								<img id="img-zona5">

								<h3 id="titulo5"> </h3>
							</div>
							<div class="feature col-md-4 " data-animation-direction="from-bottom" data-animation-delay="650" onclick="openModalarrendar()" style="cursor: pointer;">
								<img id="img-zona6">

								<h3 id="titulo6"> </h3>
							</div>
							<div class="feature col-md-4" data-animation-direction="from-bottom" data-animation-delay="650">
								<a id="link3"><img id="img-zona3"></a>

								<a id="link3">
									<h3 id="titulo3"> </h3>
								</a>
							</div>
							<!-- onclick="openModalHome()" -->
								<div class="feature col-md-4" data-animation-direction="from-bottom" data-animation-delay="650" style="cursor: pointer;">
								<a href="https://www.zonapagos.com/t_maxibienesbd/pagos.asp" target="_blanck">
							    	<img id="img-zona7">

							    	<h3 id="titulo7"> </h3>
								</a>
							</div>
						
							<div class="feature col-md-4 " data-animation-direction="from-bottom" data-animation-delay="650" onclick="openModalformulario()" style="cursor: pointer;">
								<img id="img-zona8">

								<h3 id="titulo8"> </h3>

							</div>
						
								<div class="feature col-md-4" data-animation-direction="from-bottom" data-animation-delay="650">
								<a id="link4"><img id="img-zona4"></a>

								<a id="link4">
									<h3 id="titulo4"> </h3>
								</a>
							</div>
							<div id="z-interactiva"></div>
							<!-- END LATEST NEWS -->
						</div>
					</div>
					<!-- END MAIN CONTENT -->

					<!-- BEGIN SIDEBAR -->
					<div class="sidebar colored col-sm-4">


						<div id="agencies" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
							<h2 class="section-title">Nuestras Sedes</h2>

							<select class="form-control" id="agency" name="agency" data-placeholder="Choose an agency">
								<option value="1">San Juan</option>
								<option value="2">Colores</option>
								<option value="3">Belén</option>
								<option value="4">Centro</option>
								<option value="5">Sur</option>
								<!-- The list of agencies will be automatically created. 
									Set the list of agencies in the file js/agencies.js -->
							</select>
							<div class="mapborder">
								<div id="map_agency" class="gmap">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1072926536945!2d-75.59059113774384!3d6.249590678792772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442909e434b777%3A0xdd4f5aac14ad3cc1!2sCl.+44+%2371-22%2C+Medell%C3%ADn%2C+Antioquia!5e0!3m2!1ses!2sco!4v1564066538626!5m2!1ses!2sco" frameborder="0" style="border:0; height:100%; width:100% !important;" allowfullscreen></iframe>
								</div>
							</div>
						</div>


						<!-- BEGIN NEWSLETTER -->
						<div class="col-sm-12" data-animation-direction="from-bottom" data-animation-delay="200">
							<div id="newsletter" class="col-sm-12">
								<h2 class="section-title">Suscríbete a
									nuestro <br><span>Boletín de información</span></h2>
								<form action="<?php echo $url_host ?>js/mailboletin.php" method="POST">
									<div class="input-group">
										<input type="text" placeholder="Ingresa tu Email" name="newsletter_email" id="newsletter_email" class="form-control" />
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Suscribe</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<!-- END NEWSLETTER -->

					</div>
					<!-- END SIDEBAR -->
					<div class="clearfix"></div>


				</div>
			</div>
		</div>
		<div class="content ">
			<div class="container">
				<div class="row">

					<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Últimas Publicaciones</h2>
					<div class="latest-news list-style clearfix" id="ulti-noticias">
						<?php
						for ($i = 0; $i < 3; $i++) {
							$r = $noticias;
							$ruta_imagen = "maxibienes-admin/admin/" . $r[$i]['imagen'];
							echo '<div class="item col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
								<a href="' . $url_host . 'blog/publicacion/' . $r[$i]['nombreUrl'] . '/' . $r[$i]['id'] . '">
										<span class="btn btn-default"><i class="fa fa-file-o"></i>Ver Más</span>
									</a>
									<img  src="' . $url_host . $ruta_imagen . '" alt="' . $r[$i]['textoAlt'] . '" />
								</div>
								<div class="tag"><i class="fa fa-file-text"></i></div>
								<div class="info-blog">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i>' . $r[$i]['fecha'] . '</li>
									</ul>
									<h3>
										<a href="' . $url_host . 'blog/publicacion/' . $r[$i]['nombreUrl'] . '/' . $r[$i]['id'] . '">' . $r[$i]['titulo'] . '</a>
									</h3>
									<p>' . $r[$i]['descripcion'] . '</p>
								</div>
							</div>';
						}
						?>
					</div>
					<div class="clearfix"></div>


				</div>
			</div>
		</div>

		<!-- END CONTENT WRAPPER -->

		<!-- BEGIN PARTNERS WRAPPER -->
		<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="20">Nuestros Aliados</h2>
						<div class="col-sm-12">
							<style>
								.aliados-row{
									display: flex;
									flex-wrap: wrap;
									justify-content: center;
									align-items: center;
								}
								.aliados-row img{
									margin:auto;
									margin-bottom: 20px;
								}
							</style>
							<div class="row aliados-row">
								<?php
								$qry1 = "SELECT * FROM imagenes";
								$sql1 = mysqli_query($con, $qry1);

								while ($res1 = mysqli_fetch_array($sql1)) {
									if ($res1["zona"] == 3) {
										echo '
										<div class="col-sm-12 col-md-6 col-lg-4">
											<div class="container-img">
												<img src="' . $url_host . 'maxibienes-admin/admin/' . $res1["imagen"] . '"/>
											</div>
										</div>
										';
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- END PARTNERS WRAPPER -->

		<!-- BEGIN FOOTER -->

		<footer id="footer" class="footer-ppal">
			<?php include 'include/footer.php' ?>
		</footer>

		<!-- END FOOTER -->
		<div id="stop" class="scrollTop">

		</div>

	</div>
	<!-- END TEMPLATE SETTINGS PANEL -->
	<?php include 'js/archivosjs.php' ?>
	<script src="<?php echo $url_host ?>js/search.js"></script>
	<script src="<?php echo $url_host ?>js/index.js"></script>
	<script src="<?php echo $url_host ?>js/index2.js"></script>
	<script>
		$('.carousel-inner div:first-child').addClass('active');
	</script>

	<script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="<?php echo $url_host ?>js/infobox.min.js"></script>

	<!-- Agencies list -->
	<script src="<?php echo $url_host ?>js/agencies.js"></script>
	<script type="text/javascript" src="<?php echo $url_host ?>js/owl.carousel.min.js"></script>
	<script>
		$("#partners").owlCarousel({
			nav: true,
			autoplay: true,
			autoplayTimeout: 2000,
			loop: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					loop: false
				}
			}
		});
	</script>
	<script src="<?php echo $url_host ?>js/pop-up.js"></script>
	<script src="<?php echo $url_host ?>js/informacionimg.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s"></script>

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
		function myFunction() {
			$('#home-search-buttons').css("display", "none");
			$('.buscador1').css("display", "block");
		}
	</script>

	<script>
		function volverFuncion() {
			$('#home-search-buttons').css("display", "block");
			$('.buscador1').css("display", "none");
		}

		function volverFuncion1() {
			$('#home-search-buttons').css("display", "block");
			$('.buscador2').css("display", "none");
		}

		function volverFuncion2() {
			$('#home-search-buttons').css("display", "block");
			$('.buscador3').css("display", "none");
		}

		function volverFuncion3() {
			$('#home-search-buttons').css("display", "block");
			$('.buscador4').css("display", "none");
		}
	</script>
	<script>
		function funcionVenta() {
			$('#home-search-buttons').css("display", "none");
			$('.buscador2').css("display", "block");
		}
	</script>
	<script>
		function funcionCodigo() {
			$('#home-search-buttons').css("display", "none");
			$('.buscador3').css("display", "block");
		}
	</script>
	<script>
		function funcionSedes() {
			$('#home-search-buttons').css("display", "none");
			$('.buscador4').css("display", "block");
		}
	</script>

	<script type="text/javascript">
		(function($) {
			"use strict";
			$(document).ready(function() {
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script>
	<script type="text/javascript">
		$("#agency").change(function() {
			var operacion = $("#agency option:selected").val();
			if (operacion == 1) {
				(function($) {
					var uluru = {
						lat: 6.249725,
						lng: -75.590419
					};

					var map = new google.maps.Map(document.getElementById('map_agency'), {
						zoom: 15,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				})(jQuery);
			} else if (operacion == 2) {
				(function($) {
					var uluru = {
						lat: 6.261122,
						lng: -75.585932
					};

					var map = new google.maps.Map(document.getElementById('map_agency'), {
						zoom: 15,
						center: uluru
					});

					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				})(jQuery);
			} else if (operacion == 3) {
				(function($) {
					var uluru = {
						lat: 6.232093,
						lng: -75.602029
					};

					var map = new google.maps.Map(document.getElementById('map_agency'), {
						zoom: 15,
						center: uluru
					});

					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				})(jQuery);
			} else if (operacion == 4) {
				(function($) {
					var uluru = {
						lat: 6.245033,
						lng: -75.561397
					};

					var map = new google.maps.Map(document.getElementById('map_agency'), {
						zoom: 15,
						center: uluru
					});

					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				})(jQuery);
			} else if (operacion == 5) {
				(function($) {
					var uluru = {
						lat: 6.160875,
						lng: -75.628026
					};

					var map = new google.maps.Map(document.getElementById('map_agency'), {
						zoom: 15,
						center: uluru
					});

					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				})(jQuery);
			}
		});
	</script>

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

	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 998510591;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>

	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998510591/?value=0&amp;guid=ON&amp;script=0" />
		</div>
	</noscript>

</body>

</html>