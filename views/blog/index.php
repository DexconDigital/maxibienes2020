<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->
<!-- Page Title -->
<?php $page = "Blog";
require('api_php/config.php');
require('js/noticesJSON.php');
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
<!-- Mobile Meta Tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Fav and touch icons -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="apple-touch-icon" href="images/fav_touch_icons/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="images/fav_touch_icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="images/fav_touch_icons/apple-touch-icon-114x114.png" />

<!-- IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

<!-- Google Web Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Bootstrap CSS -->
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
						<h1 class="page-title">Maxibienes, Blog</h1>

						<ul class="breadcrumb">
							<li><a href="./">Inicio </a></li>
							<li><a href="./blog">Blog</a></li>

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


						<!-- BEGIN BLOG LISTING -->
						<div id="blog-listing" class="list-style clearfix">
							<div class="row" id="notices-info">
							<?php
							 for($i=0; $i<count($noticias); $i++){
								 $r = $noticias;
								$ruta_imagen= "maxibienes-admin/admin/".$r[$i]['imagen'];
								echo'<div class="item col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
								<a href="'.$url_host.'blog/publicacion/'.$r[$i]['nombreUrl'].'/'.$r[$i]['id'].'">
										<span class="btn btn-default"><i class="fa fa-file-o"></i>Ver Más</span>
									</a>
									<img  src="'.$url_host.$ruta_imagen.'" alt="'.$r[$i]['textoAlt'].'" />
								</div>
								<div class="tag"><i class="fa fa-file-text"></i></div>
								<div class="info-blog">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i>'.$r[$i]['fecha'].'</li>
									</ul>
									<h3>
										<a href="'.$url_host.'blog/publicacion/'.$r[$i]['nombreUrl'].'/'.$r[$i]['id'].'">'.$r[$i]['titulo'].'</a>
									</h3>
									<p>'.$r[$i]['descripcion'].'</p>
								</div>
							</div>';
							}
							?>
							</div>


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
		<div id="stop" class="scrollTop">

		</div>
		<!-- END FOOTER -->

	</div>
	<!-- END WRAPPER -->




	<!-- Libs -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/variables.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/common.js"></script>
	<script src="js/top.js"></script>

	<!-- Template Scripts -->
	<script src="js/variables.js"></script>
	<script src="js/scripts.js"></script>
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