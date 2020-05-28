<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<?php
require_once("./js/bd_function.php");
require('api_php/config.php');

$codigo = $datos[3];

$link = Conect();

$sql = "SELECT * FROM noticias WHERE id = $codigo";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
	$nombre = $field['nombre'];
	$id = $field['id'];
	$descripcion = $field['descripcion'];
	$imagen = $field['imagen'];
	$noticia = $field['noticia'];
	$fecha_complete = $field['fecha'];
	$keywords = $field['keywords'];
	$meta_description = $field['description'];
	$textoAlt = $field['textoAlt'];
}
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb18030">


	<!-- Page Title -->
	<?php
	$page = $nombre; ?>
	<!-- Codificacion -->

	<meta charset="UTF-8" />
	<title><?php if ($page != "") {
				echo $page . ' | ';
			} ?> Arriendo y Venta de Propiedades en Medellín, Maxibienes</title>
	<!-- Descripcion -->
	<meta name="description" content="<?php echo $meta_description?>">
	<!-- Keyword -->
	<meta name="keywords" content="<?php echo $keywords?>">
	<!-- Author -->
	<meta name="author" content="Dexcon Digital">
	<!-- Definir dinamicas -->
	<link rel="canonical" href="http://www.arrendamientosantioquia.com/" />

	<!-- OpenGraph metadata-->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Maxibienes" />
	<meta property="og:description" content="Empresa Inmobiliaria en Medellin con amplia experiencia con arriendo y venta de propiedades." />
	<meta property="og:url" content="http://www.arrendamientosantioquia.com/"" />
	<meta property=" og:site_name" content="Maxibienes" />
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

	<meta name="description" content="Empresa en Medellin con amplia experiencia con arriendo y venta de propiedades.">
	<meta name="keywords" content="apartamentos en arriendo medellin, alquiler de apartamentos en medellin, arrendamientos envigado
	, casas en arriendo medellin, inmobiliarias en medellin, agencias inmobiliarias en medellin,agencias de arrendamientos en medellin ">
	<meta name="author" content="Biinyu Games">

	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host; ?>images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo $url_host; ?>images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host; ?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host; ?>images/fav_touch_icons/apple-touch-icon-114x114.png" />

	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

	<!-- Google Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Bootstrap CSS -->
	<link href="<?php echo $url_host; ?>css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link href="<?php echo $url_host; ?>css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url_host; ?>css/style2.css">

	<!-- Modernizr -->
	<script src="<?php echo $url_host; ?>js/modernizr-2.8.1.min.js"></script>

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
						<h1 class="page-title">Maxibienes</h1>

						<ul class="breadcrumb">
							<li><a href="<?php echo $url_host; ?>Inicio">Inicio </a></li>
							<li><a href="<?php echo $url_host; ?>Blog">Blog</a></li>
							<li><a href="">Informacion de la publicación</a></li>

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
					<style>
						.blog-main-image {
							height: 400px;
						}

						.blog-main-image img {
							width: 100%;
							height: 100%;
							object-fit: contain;
						}
					</style>
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12" id="notice-info">
						<?php
						echo '
							<h1 class="blog-title">' . $nombre . '</h1>
							<div class="blog-main-image">
								<img src="' . $url_host . 'maxibienes-admin/admin/' . $imagen . '" alt="'.$textoAlt.'" style="width: 100%;"/>
							</div>
							<div class="post-content">
								<div class="divider">
								<div class="highlight-bold text-center pb-4">' . $descripcion . '</div></div>
								<p>' . $noticia . '</p>
							</div>
							<div class="col-11">
								<small>Fecha de Publicación ' . $fecha_complete . '</small>
							</div>';
						?>
					</div>
					<!-- END MAIN CONTENT -->



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




	<!-- Libs -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo $url_host; ?>js/variables.js"></script>
	<script src="<?php echo $url_host; ?>js/menu.js"></script>
	<script src="<?php echo $url_host; ?>js/common.js"></script>
	<script src="<?php echo $url_host; ?>js/top.js"></script>
	<script src="<?php echo $url_host; ?>js/notices.js"></script>
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

	<!-- Template Scripts -->
	<script src="<?php echo $url_host; ?>js/variables.js"></script>
	<script src="<?php echo $url_host; ?>js/scripts.js"></script>
	<script>
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


</body>

</html>