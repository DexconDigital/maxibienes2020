<?php require 'api_php/config.php';?>
<!DOCTYPE html>
<html lang="es">

<head>

	<?php $page="Servicios";
	include 'SEO/metaEtiquetas.php'?>
	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host;?>images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo $url_host;?>images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host;?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host;?>images/fav_touch_icons/apple-touch-icon-114x114.png" />

	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

	<!-- Google Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<link href="<?php echo $url_host;?>css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link href="<?php echo $url_host;?>css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url_host;?>css/style2.css">

	<!-- Modernizr -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-136598713-1');
	</script>
	<script src="<?php echo $url_host;?>js/modernizr-2.8.1.min.js"></script>

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
						<?php include 'include/menu.php';?>
					</div>
				</div>
			</div>
		</header>


		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
		<div class="parallax parallax-banner  colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Nuestros Servicios</h1>

						<ul class="breadcrumb">
							<li><a href="./">Inicio</a></li>
							<li><a href="pricing-tables.html">Nuestros Servicios</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->




		<!-- BEGIN GRAY CONTENT WRAPPER -->
		<div class="gray-bg content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" id="servicios">



					</div>
				</div>
			</div>
		</div>
		<!-- END GRAY CONTENT WRAPPER -->



		<!-- END PRICING TABLES STYLE4 -->


		<!-- BEGIN FOOTER -->
		<footer id="footer" class="footer-ppal">
		<?php include 'include/footer.php'?>

		</footer>
		<!-- END FOOTER -->
		<div id="stop" class="scrollTop">

		</div>

	</div>

	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo $url_host;?>js/variables.js"></script>
	<script src="<?php echo $url_host;?>js/common.js"></script>
	<script src="<?php echo $url_host;?>js/menu.js"></script>
	<script src="<?php echo $url_host;?>js/top.js"></script>
	<script src="<?php echo $url_host;?>js/informacionimg.js"></script>
	<script src="<?php echo $url_host;?>js/scripts.js"></script>
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function () {
			FB.init({
				appId: '957165454489599',
				autoLogAppEvents: true,
				xfbml: true,
				version: 'v2.11'
			});
		};
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat" attribution=setup_tool page_id="957764824286605" theme_color="#fa3c4c"
		logged_in_greeting="Hola! Como te puedo ayudar?" logged_out_greeting="Hola! Como te puedo ayudar?">
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