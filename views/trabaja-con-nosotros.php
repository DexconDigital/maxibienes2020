<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->

<head>
	
	<?php $page="Trabaja con Nosotros";
	include 'SEO/metaEtiquetas.php';
	require 'api_php/config.php'?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-136598713-1');
	</script>
	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php ?>images/favicon.png" />
	<link rel="apple-touch-icon" href="images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav_touch_icons/apple-touch-icon-114x114.png" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet"
	 type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style2.css">

	<!-- Modernizr -->
	<script src="js/modernizr-2.8.1.min.js"></script>

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
						<?php include 'include/menu.php'?>
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
						<h1 class="page-title">Maxibienes, Trabaja con Nosotros</h1>

						<ul class="breadcrumb">
							<li><a href="./">Inicio</a></li>
							<li><a href="./trabaja-con-nosotros">Trabaja con Nosotros</a></li>

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
					<div class="main ">

						<div class="login col-sm-offset-1">



							<form class="form-style" action="../js/mailtrabajo.php" method="POST" enctype="multipart/form-data">
								<input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
								<input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
								<input type="text" name="edad" placeholder="Edad" class="form-control" required>
								<input type="text" name="direccion" placeholder="Dirección  de Residencia" class="form-control" required>
								<input type="text" name="barrio" placeholder="Barrio" class="form-control" required>
								<input type="text" name="celular" placeholder="Número de Celular" class="form-control" required>
								<input type="email" name="email" placeholder="Correo Electrónico " class="form-control" required>
								<input type="text"  name="descripcion" placeholder="Descripción del perfil ocupacional" class="form-control" required>
								<input type="text" name="tiempo" placeholder="Tiempo de experiencia laboral" class="form-control" required>
								<input type="text" name="experiencia" placeholder="Experiencia comercial o administrativa" class="form-control" required>
								<label>Envie su hoja de vida completa en formato PDF Unicamente</label>
								<input type="file" name="archivo" accept="application/pdf">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="terms" required> Confirmo que he leído, entendido y acepto el <a href="images/Politicas_Tratamiento_Datos.pdf"
										 target="_blank">Manual de políticas Web</a> , <a href="images/Aviso_de_Privacidad.pdf" target="_blank">Aviso
											de
											Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de
											consentimiento web </a>
									</label>
								</div>

								<button type="submit" name="submit" class="btn btn-fullcolor" >Enviar</button>
							</form>



						</div>


					</div>
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->


		<!-- BEGIN FOOTER -->
		<footer id="footer" class="footer-ppal">
		<?php include 'include/footer.php'?>

		</footer>
		<!-- END FOOTER -->
		<div id="stop" class="scrollTop">

		</div>

	</div>
	<!-- END WRAPPER -->

	<!-- BEGIN TEMPLATE SETTINGS PANEL -->

	<!-- END TEMPLATE SETTINGS PANEL -->


	<!-- Libs -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/common.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/top.js"></script>

	<script src="js/variables.js"></script>
	<script src="js/scripts.js"></script>
	<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '957165454489599',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="957764824286605"
  theme_color="#fa3c4c"
  logged_in_greeting="Hola! Como te puedo ayudar?"
  logged_out_greeting="Hola! Como te puedo ayudar?">
</div>



	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-40159437-9', 'auto');
		ga('send', 'pageview');
	</script>


</body>

</html>