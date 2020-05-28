<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->
<?php
require('api_php/config.php');
require_once("js/bd_function.php");
$con = Conect();
$qry = "SELECT * FROM imagenes";
$sql = mysqli_query($con, $qry);
$res =  mysqli_fetch_array($sql);

?>
<head>
	<!-- Page Title -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- Mobile Meta Tag -->
	<?php 
	$page = "Sobre Nosotros";
	include 'SEO/metaEtiquetas.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host?>images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo $url_host?>images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host?>images/fav_touch_icons/apple-touch-icon-114x114.png" />

	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

	<!-- Google Web Font -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-136598713-1');
	</script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

	<!-- Bootstrap CSS -->
	<link href="<?php echo $url_host?>css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link href="<?php echo $url_host?>css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url_host?>css/style2.css">

	<!-- Modernizr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="<?php echo $url_host?>js/modernizr-2.8.1.min.js"></script>

</head>

<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">

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
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
		<div class="parallax parallax-banner colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Maxibienes, Nuestra Compañía</h1>

						<ul class="breadcrumb">
							<li><a href="<?php echo $url_host?>inicio">Inicio</a></li>
							<li><a href="<?php echo $url_host?>sobre-nosotros">Nuestra Compañía</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->


		<!-- BEGIN HIGHLIGHT -->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="main col-sm-6">
						<div class="center" id="info0">


						</div>
						<div class="center" id="info1">


						</div>
					</div>

					<div class="col-sm-6">
						<img id="about-img" src="<?php echo $url_host?>/maxibienes-admin/admin/<?php echo $res[1]; ?>" alt="Equipo de trabajo" data-animation-direction="from-right" data-animation-delay="200" />
					</div>
				</div>
			</div>
		</div>
		<!-- END HIGHLIGHT -->

		<!-- BEGIN SERVICES -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Valores Corporativos</h2>

					<div class="services">
						<div class="col-md-2" id="valores4">

						</div>
						<div class="col-md-3" id="valores5">

						</div>
						<div class="col-md-2" data-animation-direction="from-bottom" data-animation-delay="650" id="valores6">

						</div>
						<div class="col-md-2" data-animation-direction="from-bottom" data-animation-delay="850" id="valores7">

						</div>
						<div class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="850" id="valores8">

						</div>
					</div>


				</div>

			</div>
		</div>
		<!-- END SERVICES -->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="main col-sm-12">
						<div class="center" id="info2">


						</div>

					</div>
				</div>
			</div>
		</div>

		<footer id="footer" class="footer-ppal">
			<?php include 'include/footer.php'?>
		</footer>
		<!-- END FOOTER -->
		<div id="stop" class="scrollTop">

		</div>

	</div>


	<?php include 'js/archivosjs.php' ?>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="<?php echo $url_host?>js/infobox.min.js"></script>
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


	<!-- Agencies list -->
	<script src="<?php echo $url_host?>js/informacion.js"></script>
	<script src="<?php echo $url_host?>js/agencies.js"></script>

	<script type="text/javascript">
		(function($) {
			"use strict";

			$(document).ready(function() {
				//Create agencies maps
				Cozy.agencyMap(agencies, 'agency_map1', 0);
				Cozy.agencyMap(agencies, 'agency_map2', 1);
				Cozy.agencyMap(agencies, 'agency_map3', 2);
				Cozy.agencyMap(agencies, 'agency_map4', 3);
			});
		})(jQuery);
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