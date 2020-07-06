<?php
require_once('api_php/detalle-inmuebles-conexion.php');
require('api_php/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<style>
	.similarListing .image {
		width: 100% !important;
	}
</style>

<head>
	<?php $page = "Detalle-Inmueble";
	include 'SEO/metaEtiquetas.php' ?>
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

	<!-- Datos para compartir por facebook -->
    <meta property="og:type" content="website" >
    <meta property="og:url" content="<?php echo $url_host;?> descripcion-del-inmueble/codigo/ <?php $codigo?>" >
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'].' en '.$r['Gestion'];?>" >
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] .', '. $r['ciudad'].', '.$r['depto'];?> " >
    <meta property="og:image" itemprop="image" content="<?php echo $url_host;?><?php echo $r['fotos'][0]['foto'];?>" >
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="280">
    <meta property="og:image:height" content="280">
    <!-- fin de datos para compartir por facebook -->
	<!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $r['Tipo_Inmueble'].' en '.$r['Gestion'];?>" >
    <meta name="twitter:description" content="Inmueble ubicado en: <?php echo $r['barrio'] .', '. $r['ciudad'].', '.$r['depto'];?> " >
    <meta name="twitter:image" content="<?php echo $r['fotos'][0]['foto'];?>" >
    <!-- fin de datos para compartir por twitter -->

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host; ?>images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo $url_host; ?>images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host; ?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host; ?>images/fav_touch_icons/apple-touch-icon-114x114.png" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap CSS -->
	<link href="<?php echo $url_host; ?>css/bootstrap.min.css" rel="stylesheet" />
	<!-- Template CSS -->
	<link href="<?php echo $url_host; ?>css/style.css" rel="stylesheet" />
	<link href="<?php echo $url_host; ?>css/style2.css" rel="stylesheet" />
	<link href="<?php echo $url_host; ?>css/carrousel.inmuebles.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url_host; ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $url_host; ?>css/owl.carousel.min.css">

	<!-- Modernizr -->
	<script src="<?php echo $url_host; ?>js/modernizr-2.8.1.min.js"></script>
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
		<!-- END HEADER -->


		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
		<div class="parallax parallax-banner colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Detalle Inmueble</h1>

						<ul class="breadcrumb">
							<li><a href="./">Inicio</a></li>
							<li><a href="inmuebles.html">Inmuebles</a></li>
							<li><a href="#">Detalle Inmueble
									<?php echo $codigo; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->


		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">

					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
						<h1 class="property-title" id="tipos" style="margin-bottom: 0px;">
							<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>
						</h1>
						<h1 class="property-title" style="margin-top: 0px;">
							<small class="property-title ubicacion">
								Codigo: <?php echo $codigoinm ?> </br> Ubicación: <?php echo $r['barrio'] . ', ' . $r['ciudad']; ?>
							</small>
						</h1>

						<div class="property-topinfo">
							<ul class="amenities">
								<li class="area"><i class="fa fa-compress"></i> <?php echo $r['AreaConstruida']; ?> m<sup>2</sup></li>
								<li class="alcobas"><i class="fa fa-bed"></i> <?php echo $r['alcobas']; ?></li>
								<li class="banios"><i class="fa fa-bath"></i> <?php echo $r['banos'] ?></li>
								<li class="garaje"><i class="fas fa-warehouse negro"></i> <?php echo $r['garaje']; ?></li>
							</ul>
							<!-- Ubicar precio -->
							<?php if ($r['Gestion'] == 'Arriendo/venta') {
								echo '<div id="property-id" class="precio">Arriendo: $' . number_format($r['ValorCanon']) . ' / Venta: $' . number_format($r['ValorVenta']) . ' </div>';
							} else if ($r['Gestion'] == "Arriendo") {
								echo '<div id="property-id" class="precio">$ ' . number_format($r['ValorCanon']) . ' </div>';
							} else {
								echo '<div id="property-id" class="precio">$ ' . number_format($r['ValorVenta']) . ' </div>';
							}
							?>
							<div id="property-id" class="precio"> </div>
						</div>

						<div class="clearfix"></div>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<?php
								echo '<div class="item active">
                                        <img src="' . $r['fotos'][0]['foto'] . '" alt="Fotos del inmueble">
                                        </div>';
								for ($i = 1; $i < count($r['fotos']); $i++) {
									echo '<div class="item">
                                            <img src="' . $r['fotos'][$i]['foto'] . '" alt="Fotos del inmueble">
                                            </div>';
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
						<div class="clearfix"></div>
						<?php
						if ($r['descripcionlarga'] != "" && ($r['Estrato'] != 0 || $r['Estrato'] != "") && ($r['EdadInmueble'] != 0 || $r['EdadInmueble'] != "")) {
							echo '
									<h1 class="section-title">Descripción</h1>
									<p> ' . $r['Tipo_Inmueble'] . ' Estrato ' . $r['Estrato'] . ' con ' . $r['EdadInmueble'] . ' años de Antiguedad. ' . $r['descripcionlarga'] . ' </p>
								';
						} else if ($r['descripcionlarga'] != "" && ($r['Estrato'] != 0 || $r['Estrato'] != "")) {
							echo '
									<h1 class="section-title">Descripción</h1>
									<p> ' . $r['Tipo_Inmueble'] . ' Estrato ' . $r['Estrato'] . '. ' . $r['descripcionlarga'] . ' </p>
								';
						}
						if ($r['Administracion'] != 0) {
							echo '<span>Administración: $' . $r['Administración'] . '</span>';
						}
						if (count($r['caracteristicasInternas']) > 0) {
							echo '<h1 class="section-title">Características Internas</h1>
								<ul class="property-amenities-list" id="details-1">';
							for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
								$caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
								echo '<li>' . $caracteristicas . '</li>';
							}
							echo  '</ul>';
						}
						if (count($r['caracteristicasExternas']) > 0) {
							echo '<h1 class="section-title">Características Externas</h1>
								<ul class="property-amenities-list" id="details-1">';
							for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
								$caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
								echo '<li>' . $caracteristicas . '</li>';
							}
							echo  '</ul>';
						}
						if (count($r['caracteristicasAlrededores']) > 0) {
							echo '<h1>Características de los alrededores</h1>
								<ul class="property-amenities-list" id="details-1">';
							for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
								$caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
								echo '<li>' . $caracteristicas . '</li>';
							}
							echo  '</ul>';
						}
						if ($r["video"] != "") {
							echo '
							<h1 class="section-title">Video</h1>
							<div class="container justify-content-center w-100">
								<iframe height="315" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="clearfix"></div>
							';
						}
						?>





						<h1 class="section-title">Ubicación</h1>
						<!-- PROPERTY MAP HOLDER -->
						<div id="property_location">

							<div id="map" style="height:300px"></div>

						</div>

						<div class="share-wraper col-sm-12">
							<h5>Compartir:</h5>
							<ul class="social-networks">
								<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.maxibienes.com%2Fdescripcion-del-inmueble%2Fcodigo%2F<?php echo $codigo; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="<?php echo 'https://twitter.com/intent/tweet?url='.$url_host.'%2Fdescripcion-del-inmueble%2Fcodigo%2F' . $codigo . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.maxibienes.com%2Fdescripcion-del-inmueble%3Fco%3D<?php echo $codigo; ?>"><i class="fa fa-pinterest"></i></a></li>
								<li><a id="myBtn"><i class="fa fa-envelope"></i></a></li>
							</ul>
							<a class="print-button" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=649-<?php echo $codigo; ?>" target="_blank">
								<i class="fa fa-print"></i>
							</a>
						</div>
						<div id="myModaldetalle" class="modal">
							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<span class="close">&times;</span>
								</div>
								<div class="modal-body">
									<div class="contact-form">
										<div class="container">

											<div>
												<div class="col-sm-12">
													<input type="text" name="name" id="name" placeholder="Su Nombre" class="form-control required fromName" />
													<input type="text" name="name_envia" id="name_envia" placeholder="Nombre del Amigo" class="form-control required fromName" />
													<input type="email" name="email" placeholder="Email" id="email" class="form-control required fromEmail" />
													<textarea name="message" placeholder="Mensaje" id="message" class="form-control required"></textarea>
													<input type="checkbox" name="terms"> Confirmo que he leído, entendido y acepto el <a href="images/Politicas_Tratamiento_Datos.pdf" target="_blank">Manual de políticas Web</a> , <a href="images/Aviso_de_Privacidad.pdf" target="_blank">Aviso de
														Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de consentimiento web </a>
												</div>

												<div class="center">
													<button type="submit" class="btn btn-default-color btn-lg submit_form" onclick="enviardetalle()"><i class="fa fa-envelope"></i>Enviar
														Mensaje</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
					<!-- END MAIN CONTENT -->


					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">

						<!-- BEGIN ADVANCED SEARCH -->
						<h2 class="section-title">Buscador</h2>

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
									<select class="form-control alcobas" data-placeholder="Habitación">
										<option value="0">Habitación </option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>

									</select>
								</div>

								<div class="form-control-small">
									<select class="form-control banios" data-placeholder="Baño">
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
									<input type="text" class="form-control areamin" placeholder="Área Mínima">
								</div>
								<div class="form-control-large">
									<input type="text" class="form-control areamax" placeholder="Área Máxima">
								</div>
								<div class="form-control-small">
									<button type="submit" class="btn btn-fullcolor buscar" id="buscar">Buscar</button></div>


							</div>

							<!-- END ADVANCED SEARCH -->

							<!-- BEGIN LATEST NEWS -->
							<h2 class="section-title">Contacto con Asesor</h2>
							<div class="col-sm-12 ">
								<div class="detalle-asesor">

								</div>
							</div>
							<!-- END LATEST NEWS -->
							<h2 class="section-title">Formulario de Contacto</h2>

							<form class="form-style" action="<?php echo $url_host ?>js/mailinmuebles.php" method="POST">
								<div class="col-sm-12">
									<input type="text" name="name" placeholder="Nombre" class="form-control required fromName" required>

									<input type="email" name="email" placeholder="Email" class="form-control required fromEmail" required>

									<input type="text" name="Subject" placeholder="Asunto" class="form-control required subject" required>
									<textarea name="Message" placeholder="Mensaje" class="form-control required" required></textarea>

									<input type="checkbox" name="terms" required> Confirmo que he leído, entendido y acepto el
									 <!-- <a href="images/Politicas_Tratamiento_Datos.pdf" target="_blank">Manual de políticas Web</a> ,  -->
									 <a href="<?php echo $url_host ?>images/Aviso_de_Privacidad.pdf" target="_blank">Aviso de Privacidad</a>.
									 <!-- <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de consentimiento web </a> -->
								</div>

								<div class="center">
									<button type="submit" class="btn btn-default-color btn-lg submit_form mt-4"><i class="fa fa-envelope"></i>Enviar
										Mensaje</button>
								</div>
								<select name="codigo" class="invisible display:none">
									<option value=" <?php echo $codigo ?>"> <?php echo $codigo ?></option>
								</select>
							</form>
							<!-- BEGIN NEWSLETTER -->
							<h1 class="section-title">Propiedades Similares</h1>
							<div id="similar-properties" class="grid-style1 clearfix">
								<div class="row similarListing" id="p_similares">

								</div>


							</div>
							<!-- END NEWSLETTER -->

						</div>
						<!-- END SIDEBAR -->

					</div>
				</div>
			</div>
			<!-- END CONTENT WRAPPER -->


			<!-- BEGIN FOOTER -->
			<footer id="footer" class="footer-ppal">

				<?php include 'include/footer.php' ?>
			</footer>
			<div id="stop" class="scrollTop">

			</div>
			<!-- END FOOTER -->

		</div>
		<!-- END WRAPPER -->
		<!-- BEGIN TEMPLATE SETTINGS PANEL -->
		<!-- END TEMPLATE SETTINGS PANEL -->
		<!-- Libs -->


		<?php include 'js/archivosjs.php' ?>

		<script src="<?php echo $url_host; ?>js/buscador_inmueble.js"></script>
		<script src="<?php echo $url_host; ?>js/emaildetalle.js"></script>
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

		<script type="text/javascript" src="<?php echo $url_host; ?>js/owl.carousel.js"></script>
		<script type="text/javascript" src="<?php echo $url_host; ?>js/owl.carousel.min.js"></script>
		<?php echo "<script> var codeInm ='" . $codigo . "';</script>"; ?>
		<script type="text/javascript">
			var latitud = 0;
			var longitud = 0;
			$(document).ready(function() {
				loadPropierty();
			});

			function loadPropierty() {
				$.ajax({
					url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codeInm + "",
					async: true,
					type: "GET",
					dataType: "json",
					beforeSend: function(xhr) {
						var paths = location.pathname.split('/');
						var path = paths[paths.length - 1];
						if (path !== "sur") {
							xhr.setRequestHeader(
								"Authorization",
								'Basic ' + btoa('Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649')
							);
						} else {
							xhr.setRequestHeader(
								"Authorization",
								'Basic ' + btoa('Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618')
							);
						}

					},
					success: function(data) {
						if (data.msn == "Inmueble NO Disponible") {
							var paths = location.pathname.split('/');
							var path = paths[paths.length - 1];
							if (path !== "sur") {
								window.history.pushState("", "", location.pathname + '/sur')
								loadPropierty();
							} else {
								openModal();
							}
						} else {
							successPropierty(data);
						}

					},
					error: function(data) {
						console.log("Fail");
					}
				});

			}

			if () {

			}

			function initMap(latitud, longitud) {
				var uluru = {
					lat: parseFloat(latitud),
					lng: parseFloat(longitud)
				};
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 17,
					center: uluru
				});
				var marker = new google.maps.Marker({
					position: uluru,
					map: map
				});
			}

			function successPropierty(data) {
				var j = 1;
				var detallea = '';
				if ((data.asesor[0] == undefined)) {
					detallea = '<p class="p1" ><a href="mailto:' + data.inmobiliaria.correo + '" target="_blank" ><i class="fa fa-envelope"></i> ' + data.inmobiliaria.correo + '</p></a>' +
						'<p class="p1" ><a href="tel:' + data.inmobiliaria.telefono + '" target="_blank"><i class="fa fa-phone"></i> ' + data.inmobiliaria.telefono + '</p></a>';
				} else {
					detallea += '<p class="p1" >' + data.asesor[0].ntercero + '</p>' +
						'<p class="p1" ><a href="mailto:' + data.asesor[0].correo + '" target="_blank"  ><i class="fa fa-envelope" ></i> ' + data.asesor[0].correo + '</p></a>' +
						'<p class="p1" ><a href="tel:' + data.asesor[0].celular + '" target="_blank"  ><i class="fa fa-phone" ></i> ' + data.asesor[0].celular + '</p></a>';
				}

				$(".detalle-asesor").append(detallea);
				latitud = data.latitud;
				longitud = data.longitud;
				if (typeof(Storage) !== "undefined") {
					window.localStorage.setItem("codigo", data.idInm)

					window.localStorage.setItem("gestion", data.Tipo_Inmueble)
					localStorage.setItem("latitud", latitud);
					localStorage.setItem("longitud", longitud);

				} else {
					document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
				}

				initMap(latitud, longitud);
			}


			function openModal() {
				$("body").append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
					'<div class="modal-dialog" role="document">' +
					'<div class="modal-content">' +
					'<div class="modal-header">' +
					'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
					'<h4 class="modal-title" id="myModalLabel">Descripción del inmueble</h4>' +
					'</div>' +
					'<div class="modal-body">' +
					'El inmueble no existe en Maxibienes' +
					'</div>' +
					'<div class="modal-footer">' +
					'<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
					'</div>' +
					'</div>' +
					'</div>' +
					'</div>');

				$("#myModal").modal('show');
				setTimeout(() => {
					redirect();
				}, 2000);
			}

			function redirect() {
				window.history.back();
			}
		</script>

		<script>
			// Get the modal
			var modal = document.getElementById('myModaldetalle');

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
				modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
		<!-- Template Scripts -->
		<script src="<?php echo $url_host ?>js/variables.js"></script>

		<?php echo '<script>
						var idCiudad = ' . $r['IdCiudad'] . ' 
						var idInmueble = ' . $r['IdTpInm'] . '
						var idSede = ' . $r['sede'] . '
					</script>';
		?>

		<script src="<?php echo $url_host ?>js/similar.js"></script>
</body>

</html>