<!DOCTYPE html>

<html lang="es">

<?php
require 'controllers/listaInmueblesController.php'; ?>


<head>
	<meta charset="utf-8" />

	<!-- Page Title -->
	<?php $page = "Lista de inmuebles";
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

	<!-- Modernizr -->
	<!-- <script src="<?php echo $url_host ?>js/modernizr-2.8.1.min.js"></script> -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script> -->
	<!-- <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-136598713-1');
	</script> -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap"></script>
	<script>
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {
					lat: 6.252726,
					lng: -75.577777
				},
				zoom: 12
			});
		}
	</script>

	<!-- <script src="<?php echo $url_host ?>js/peticion.js"></script> -->

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
					<div class="row">
						<?php include 'include/menu.php' ?>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->


		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
		<div class="parallax parallax-banner colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Maxibienes, Oferta Inmobiliaria</h1>

						<ul class="breadcrumb">
							<li><a href="<?php echo $url_host . 'inicio' ?>">Inicio</a></li>
							<li><a href="#">Inmuebles</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12">
				<h2 class="text-center titulo-inmueble mt-4 mb-4 pt-4 pb-4">Lista de Inmuebles de la sede
					<?php
					if ($sede == 12062) {
						echo 'San Juan';
					}
					if ($sede == 12063) {
						echo 'Colores';
					}
					if ($sede == 12064) {
						echo 'Belén';
					}
					if ($sede == 12065) {
						echo 'Centro';
					}
					if ($sede == 12066) {
						echo 'Sur';
					}
					?>
				</h2>
			</div>
		</div>
	
		<div class="container">
			<div class="row">
				<div class="col-12 margin-25">
					<div class="row">
						<div id="" class="grid-style1 clearfix">
							<?php
							if (is_array($r)) {
								modeloInmueble($r, $url_host);
							} else {
								echo '<h2 class="text-center mb-4">No se encontraron inmuebles</h2>';
							}
							?>
						</div>
						<!-- END PROPERTY LISTING -->
						<div class="col-xs-12">
							<?php if (is_array($r)) {
								echo '
								<div class="pagination-area mb-60 text-center">
								<span><small id="numero_pagina"></small/></span>
								<ul class="pager">
									<li><a href="#" id="ant" onclick="paginador(1)">Anterior</a></li>
									<li><a href="#" id="next" onclick="paginador(2)">Siguiente</a></li>
								</ul>
								</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
		<div class="col-md-4">
					<div class="gray open main" style="margin-top:5%;">
						<h2 class="text-center mb-4">Busca Inmuebles en esta sede</h2>
						<div class="form-group">
							<div class="form-control-large">
								<input type="text" class="form-control codeInm" name="location" placeholder="Código">
							</div>

							<div class="form-control-large">
								<select class="form-control operacion" data-placeholder="Operación">
									<option value="0">Operación </option>

								</select>
							</div>
							<div class="form-control-small">
								<select class="form-control inmueble" data-placeholder="Tipo de Inmueble">
									<option value="0">Tipo de Inmueble</option>

								</select>
							</div>

							<div class="form-control-small">
								<select class="form-control ciudad" data-placeholder="Ciudad">
									<option value="0">Ciudad</option>
								</select>
							</div>

							<div class="form-control-small">
								<select class="form-control zona" data-placeholder="Barrio">

									<option value="0">Barrio</option>

								</select>
							</div>
							<div class="form-group">
								<div class="form-control-large">
									<select class="form-control alcoba" data-placeholder="Habitación">
										<option value="0">Habitación </option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>

								<div class="form-control-small">
									<select class="form-control banio" data-placeholder="Baño">
										<option value="0">Baño </option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>

								<div class="form-control-small">
									<select class="form-control parqueaderos" data-placeholder="Parqueadero">
										<option value="0">Parqueadero </option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>

								<div class="form-control-large">
									<input type="number" class="form-control areamin" placeholder="Área Mínima">
								</div>
								<div class="form-control-large">
									<input type="number" class="form-control areamax" placeholder="Área Máxima">
								</div>
								<div class="form-control-small">
									<button type="submit" class="btn btn-fullcolor buscar" id="buscar">Buscar</button>
								</div>
							</div>
						</div>

					</div>
				</div>
		<div class="col-md-8">
			<div class="content">

				<!-- BEGIN MAIN CONTENT -->
				<div class="main ">
					<div id="map" style="height:95vh; width:90%; margin:auto; margin-top:5%">

					</div>
				</div>
				<!-- END MAIN CONTENT -->

			</div>
		</div>
			</div>
		</div>
	</div>
	<footer id="footer" class="footer-ppal">
		<?php include 'include/footer.php' ?>
	</footer>
	<!-- END WRAPPER -->
    <div id="stop" class="scrollTop">

    </div>
	<!-- BEGIN TEMPLATE SETTINGS PANEL -->

	<!-- END TEMPLATE SETTINGS PANEL -->


	<!-- Libs -->
	<?php include 'js/archivosjs.php' ?>
	<script type="text/javascript">
		$(".operacion").change(function() {
			var operacion = $(".operacion option:selected").val();
			console.log(operacion)

			if (operacion == 1) {
				$('#dis-precio-arriendo').css("display", "block")
				$('#dis-precio-venta').css("display", "none")
			} else if (operacion == 5) {
				$('#dis-precio-venta').css("display", "block")
				$('#dis-precio-arriendo').css("display", "none")
			} else if (operacion == 2) {
				$('#dis-precio-venta').css("display", "block")
				$('#dis-precio-arriendo').css("display", "none")
			}
		});
	</script>
	<?php echo '<script>var nombresede = "' . $nombresede . '"</script>'; ?>
	<?php echo '<script>var sede = ' . $sede . '</script>'; ?>
	<?php echo '<script>var pagina = ' . $pag . '</script>'; ?>
	<?php echo '<script>var gs = ' . $gs . '</script>'; ?>
	<?php echo '<script>var ti = ' . $ti . '</script>'; ?>
	<?php echo '<script>var ci = ' . $ci . '</script>'; ?>
	<?php echo '<script>var zo = ' . $zo . '</script>'; ?>
	<?php echo '<script>var pre = ' . $pre . '</script>'; ?>
	<?php echo '<script>var al = ' . $al . '</script>'; ?>
	<?php echo '<script>var ba = ' . $ba . '</script>'; ?>
	<?php echo '<script>var par = ' . $par . '</script>'; ?>
	<?php echo '<script>var armin = ' . $armin . '</script>'; ?>
	<?php echo '<script>var armax = ' . $armax . '</script>'; ?>
	<?php echo '<script>var min = ' . $min . '</script>'; ?>
	<?php echo '<script>var max = ' . $max . '</script>'; ?>
	<?php echo '<script>var totalpagina = ' . $r['datosGrales']['totalPagina'] . '; </script>'; ?>
	<?php echo '<script>var totalInmuebles = ' . $r['datosGrales']['totalInmuebles'] . '; </script>'; ?>
	<?php echo '<script>var url = "' . $url_total . '"; </script>'; ?>
	<script>
	</script>
	<script src="<?php echo $url_host ?>js/buscador_inmueble_sede.js"></script>

	<script src="<?php echo $url_host ?>js/paginador.js"></script>

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