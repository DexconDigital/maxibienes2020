<!DOCTYPE html>
<?php require 'api_php/config.php'?>
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
	$sql=mysqli_query($con,$qry);
    $res=  mysqli_fetch_array($sql) ; 

?>
<head>
	<meta charset="utf-8" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-136598713-1');
</script>

	<!-- Page Title -->
	<?php $page="Nuestras Sedes";
	include 'SEO/metaEtiquetas.php';?>

	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url_host ?>images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_host ?>images/fav_touch_icons/apple-touch-icon-114x114.png" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet"
	 type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="<?php echo $url_host ?>css/bootstrap.min.css" rel="stylesheet" />

	<link href="<?php echo $url_host ?>css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url_host ?>css/style2.css">


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
						<h1 class="page-title">Nuestras Sedes</h1>

						<ul class="breadcrumb">
							<li><a href="./">Inicio</a></li>
							<li><a href="nuestra-sedes.html">Nuestras Sedes</a></li>

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
					<!-- BEGIN SIDEBAR -->
					<div class="col-sm-12">
						<h2 class="section-title"> Comunícate con nosotros para tener el gusto de atenderte</h2>
						<div class="print-tab" data-tab-id="1">
							<ul class="print-tab-menu">
								<li data-tab-menu="tab1" target="h_blank"><a>San Juan</a></li>
								<li data-tab-menu="tab2"><a>Colores</a></li>
								<li data-tab-menu="tab3"><a>Belén</a></li>
								<li data-tab-menu="tab4"><a>Centro</a></li>
								<li data-tab-menu="tab5"><a>Sur</a></li>
							</ul>
							<div class="print-tab-content">
								<div data-tab-content="tab1">
									<div class="col-sm-4">
										<div id="map" style="height:400px">
											<iframe src="sede-sanjuan.php" frameborder="0" style="width:100%;height:100%"></iframe>
										</div>
										<h3 class="titulo-sedes mb-4">San Juan</h3>
										<p><i class="fa fa-map-marker"></i> Calle 44 San Juan No 71 - 22</p>
										<p><i class="fa fa-phone"></i> <a href="tel:3014075020"> 301 407 5020</a></p>
										<p><i class="fa fa-envelope"></i><a href="mailito:arrendamientos@maxibienes.com">
												arrendamientos@maxibienes.com</a></p>
										<p><i class="fa fa-calendar"></i> Lunes a Viernes: de 8:00 a.m. </p>
										<p>a 6:00 p.m. Jornada Continua</p>
										<p>Sábados: de 9:00 a.m. a 1:00 p.m.</p>
									</div>
									<div class="col-sm-8">
										<div class="print-tab" data-tab-id="2">
											<h2 class="directorio">Directorio</h2>
											<ul class="print-tab-menu" id="nuevo-menu-tab">

												<li data-tab-menu="tab7" id="li-opciones"><a>Arriendos</a></li>
												<li data-tab-menu="tab8" id="li-opciones"><a>Ventas</a></li>
												<li data-tab-menu="tab9" id="li-opciones"><a>Administrativos
												</a></li>

											</ul>
											<div class="print-tab-content">
												<div data-tab-content="tab7">
													<ul id="agencies-results" class="agencies-list">
												<?php
													while($res= mysqli_fetch_array($sql)){
														if($res["sede"]==1 && $res["departamento"]==2){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res["celular"].'"><i class="fa fa-phone"></i>
																	'.$res["celular"].'</a></li>
																	<li><a href="mailto:'.$res["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>


													</ul>
												</div>
												<div data-tab-content="tab8">
													<ul id="agencies-results" class="agencies-list">
													<?php
													$qry1 = "SELECT * FROM asesores";
													$sql1=mysqli_query($con,$qry1);
													while($res1= mysqli_fetch_array($sql1)){
														if($res1["sede"]==1 && $res1["departamento"]==1){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res1["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res1["celular"].'"><i class="fa fa-phone"></i>
																	'.$res1["celular"].'</a></li>
																	<li><a href="mailto:'.$res1["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res1["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>
													</ul>
												</div>
												<div data-tab-content="tab9" >
												<?php
													$qry2 = "SELECT * FROM asesores";
													$sql2=mysqli_query($con,$qry2);
													while($res2= mysqli_fetch_array($sql2)){
														if($res2["sede"]==1 && $res2["departamento"]==3){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res2["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res2["celular"].'"><i class="fa fa-phone"></i>
																	'.$res2["celular"].'</a></li>
																	<li><a href="mailto:'.$res2["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res2["correo"].'</a></li>
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
								<div data-tab-content="tab2">
									<div class="col-sm-4">
										<div id="map1" style="height:400px">
											<iframe src="sede-colores.php" frameborder="0" style="width:100%;height:100%"></iframe>
										</div>
										<h3 class="titulo-sedes">Colores</h3>
										<p><i class="fa fa-map-marker"></i> Calle 53 Nº 71 - 11 Local 109, Mall Colores</p>
										<p><i class="fa fa-phone"></i> <a href="tel:3006575400">300 657 5400</a></p>
										<p><i class="fa fa-envelope"></i> <a href="mailito:arrendamientoscolores@maxibienes.com">arrendamientoscolores@maxibienes.com</a></p>
										<p><i class="fa fa-calendar"></i> Lunes a Viernes: de 8:00 a.m. </p>
										<p>a 6:00 p.m. Jornada Continua</p>
										<p>Sábados: de 9:00 a.m. a 1:00 p.m</p>
									</div>
									<div class="col-sm-8">
										<div class="print-tab" data-tab-id="2">
											<h2 class="directorio">Directorio</h2>
											<ul class="print-tab-menu" id="nuevo-menu-tab">

												<li data-tab-menu="tab11" id="li-opciones"><a>Arriendos</a></li>
												<li data-tab-menu="tab12" id="li-opciones"><a>Ventas</a></li>
												<li data-tab-menu="tab13" id="li-opciones"><a>Administrativos
													</a></li>

											</ul>
											<div class="print-tab-content">
												<div data-tab-content="tab10" style="display: none;	">
												</div>
												<div data-tab-content="tab11">
													<ul id="agencies-results" class="agencies-list">
													<?php
													$qry3 = "SELECT * FROM asesores";
													$sql3=mysqli_query($con,$qry3);
													while($res3= mysqli_fetch_array($sql3)){
														if($res3["sede"]==2 && $res3["departamento"]==2){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res3["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res3["celular"].'"><i class="fa fa-phone"></i>
																	'.$res3["celular"].'</a></li>
																	<li><a href="mailto:'.$res3["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res3["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>

													</ul>
												</div>
												<div data-tab-content="tab12" >
												<?php
													$qry4 = "SELECT * FROM asesores";
													$sql4=mysqli_query($con,$qry4);
													while($res4= mysqli_fetch_array($sql4)){
														if($res4["sede"]==2 && $res4["departamento"]==1){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res4["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res4["celular"].'"><i class="fa fa-phone"></i>
																	'.$res4["celular"].'</a></li>
																	<li><a href="mailto:'.$res4["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res4["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>

												</div>
												<div data-tab-content="tab13" >
												<?php
													$qry5 = "SELECT * FROM asesores";
													$sql5=mysqli_query($con,$qry5);
													while($res5= mysqli_fetch_array($sql5)){
														if($res5["sede"]==2 && $res5["departamento"]==3){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res5["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res5["celular"].'"><i class="fa fa-phone"></i>
																	'.$res5["celular"].'</a></li>
																	<li><a href="mailto:'.$res5["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res5["correo"].'</a></li>
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
								<div data-tab-content="tab3">
									<div class="col-sm-4">
										<div id="map2" style="height:400px">
											<iframe src="sede-belen.php" frameborder="0" style="width:100%;height:100%"></iframe>
										</div>
										<h3 class="titulo-sedes">Belén</h3>
										<p><i class="fa fa-map-marker"></i> CRA 81 (Av.80) # 30A-14 - Segundo Piso</p>
										<p><i class="fa fa-phone"></i> <a href="tel:3113135639">311 313 5639</a></p>
										<p><i class="fa fa-envelope"></i> <a href="mailito:arrendamientosbelen@maxibienes.com">arrendamientosbelen@maxibienes.com</a></p>
										<p><i class="fa fa-calendar"></i> Lunes a Viernes: de 8:00 a.m. </p>
										<p>a 6:00 p.m. Jornada Continua</p>
										<p>Sábados: de 9:00 a.m. a 1:00 p.m.</p>
									</div>
									<div class="col-sm-8">
										<div class="print-tab" data-tab-id="2">
											<h2 class="directorio">Directorio</h2>
											<ul class="print-tab-menu" id="nuevo-menu-tab">

												<li data-tab-menu="tab15" id="li-opciones"><a>Arriendos</a></li>
												<li data-tab-menu="tab16" id="li-opciones"><a>Ventas</a></li>
												<li data-tab-menu="tab17" id="li-opciones"><a>Administrativos
													</a></li>

											</ul>
											<div class="print-tab-content">
												<div data-tab-content="tab14" style="display: none;	">
												</div>
												<div data-tab-content="tab15">
													<ul id="agencies-results" class="agencies-list">
													<?php
													$qry6 = "SELECT * FROM asesores";
													$sql6=mysqli_query($con,$qry6);
													while($res6= mysqli_fetch_array($sql6)){
														if($res6["sede"]==3 && $res6["departamento"]==2){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res6["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res6["celular"].'"><i class="fa fa-phone"></i>
																	'.$res6["celular"].'</a></li>
																	<li><a href="mailto:'.$res6["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res6["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>



													</ul>
												</div>
												<div data-tab-content="tab16" >
												<?php
													$qry7 = "SELECT * FROM asesores";
													$sql7=mysqli_query($con,$qry7);
													while($res7= mysqli_fetch_array($sql7)){
														if($res7["sede"]==3 && $res7["departamento"]==1){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res7["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res7["celular"].'"><i class="fa fa-phone"></i>
																	'.$res7["celular"].'</a></li>
																	<li><a href="mailto:'.$res7["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res7["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>

												</div>
												<div data-tab-content="tab17" >
												<?php
													$qry8 = "SELECT * FROM asesores";
													$sql8=mysqli_query($con,$qry8);
													while($res8= mysqli_fetch_array($sql8)){
														if($res8["sede"]==3 && $res8["departamento"]==3){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res8["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res8["celular"].'"><i class="fa fa-phone"></i>
																	'.$res8["celular"].'</a></li>
																	<li><a href="mailto:'.$res8["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res8["correo"].'</a></li>
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
								<div data-tab-content="tab4">
									<div class="col-sm-4">
										<div id="map3" style="height:400px">
											<iframe src="sede-centro.php" frameborder="0" style="width:100%;height:100%"></iframe>
										</div>
										<h3 class="titulo-sedes">Centro</h3>
										<p><i class="fa fa-map-marker"></i> Carrera 40 Nº 47-54 Tranvía Plaza / </p>
										<p>Torre pichincha interior 236</p>
										<p><i class="fa fa-phone"></i> <a href="tel:3002074401">300 207 4401</a></p>
										<p><i class="fa fa-envelope"></i> <a href="mailito:arrendamientoscentro@maxibienes.com">arrendamientoscentro@maxibienes.com</a></p>
										<p><i class="fa fa-calendar"></i> Lunes a Viernes: de 8:00 a.m. </p>
										<p>a 6:00 p.m. Jornada Continua</p>
										<p>Sábados: de 9:00 a.m. a 1:00 p.m.</p>
									</div>
									<div class="col-sm-8">
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
													$qry9 = "SELECT * FROM asesores";
													$sql9=mysqli_query($con,$qry9);
													while($res9= mysqli_fetch_array($sql9)){
														if($res9["sede"]==4 && $res9["departamento"]==2){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res9["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res9["celular"].'"><i class="fa fa-phone"></i>
																	'.$res9["celular"].'</a></li>
																	<li><a href="mailto:'.$res9["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res9["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>

													</ul>
												</div>
												<div data-tab-content="tab20" >
												<?php
													$qry8 = "SELECT * FROM asesores";
													$sql8=mysqli_query($con,$qry8);
													while($res8= mysqli_fetch_array($sql8)){
														if($res8["sede"]==4 && $res8["departamento"]==1){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res8["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res8["celular"].'"><i class="fa fa-phone"></i>
																	'.$res8["celular"].'</a></li>
																	<li><a href="mailto:'.$res8["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res8["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>

												</div>
												<div data-tab-content="tab21" >
												<?php
													$qry10 = "SELECT * FROM asesores";
													$sql10=mysqli_query($con,$qry10);
													while($res10= mysqli_fetch_array($sql10)){
														if($res10["sede"]==4 && $res10["departamento"]==3){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res10["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res10["celular"].'"><i class="fa fa-phone"></i>
																	'.$res10["celular"].'</a></li>
																	<li><a href="mailto:'.$res10["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res10["correo"].'</a></li>
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
								<div data-tab-content="tab5">
									<div class="col-sm-4">
										<div id="map4" style="height:400px">
											<iframe src="sede-sur.php" frameborder="0" style="width:100%;height:100%"></iframe>
										</div>
										<h3 class="titulo-sedes">Sur</h3>
										<p><i class="fa fa-map-marker"></i> Cra 52 D #75 AA Sur 280 Local 127 </p>
										<p>Bulevar Suramerica</p>
										<p><i class="fa fa-phone"></i> <a href="tel:3135626900">313 562 6900</a></p>
										<p><i class="fa fa-envelope"></i> <a href="mailito:arrendamientossur@maxibienes.com">arrendamientossur@maxibienes.com</a></p>
										<p><i class="fa fa-calendar"></i> Lunes a Viernes: de 8:00 a.m. </p>
										<p>a 6:00 p.m. Jornada Continua</p>
										<p>Sábados: de 9:00 a.m. a 1:00 p.m.</p>
									</div>
									<div class="col-sm-8">
										<div class="print-tab" data-tab-id="2">
											<h2 class="directorio">Directorio</h2>
											<ul class="print-tab-menu" id="nuevo-menu-tab">

												<li data-tab-menu="tab23" id="li-opciones"><a>Arriendos</a></li>
												<li data-tab-menu="tab24" id="li-opciones"><a>Ventas</a></li>
												<li data-tab-menu="tab25" id="li-opciones"><a>Administrativos
													</a></li>

											</ul>
											<div class="print-tab-content">
												<div data-tab-content="tab22" style="display: none;	">
												</div>
												<div data-tab-content="tab23">
													<ul id="agencies-results" class="agencies-list">
													<?php
													$qry11 = "SELECT * FROM asesores";
													$sql11=mysqli_query($con,$qry11);
													while($res11= mysqli_fetch_array($sql11)){
														if($res11["sede"]==5 && $res11["departamento"]==2){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res11["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res11["celular"].'"><i class="fa fa-phone"></i>
																	'.$res11["celular"].'</a></li>
																	<li><a href="mailto:'.$res11["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res11["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>
													</ul>
												</div>
												<div data-tab-content="tab24" >
												<?php
													$qry12 = "SELECT * FROM asesores";
													$sql12=mysqli_query($con,$qry12);
													while($res12= mysqli_fetch_array($sql12)){
														if($res12["sede"]==5 && $res12["departamento"]==1){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res12["foto"].'" class="img-sedes"></center>
																<h2></h2>



																<ul class="contact-us">
																	<li><a href="tel:'.$res12["celular"].'"><i class="fa fa-phone"></i>
																	'.$res12["celular"].'</a></li>
																	<li><a href="mailto:'.$res12["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res12["correo"].'</a></li>
																</ul>


															</div>
														</li>';
														}
													}
												?>

												</div>
												<div data-tab-content="tab25" >
												<?php
													$qry13 = "SELECT * FROM asesores";
													$sql13=mysqli_query($con,$qry13);
													while($res13= mysqli_fetch_array($sql13)){
														if($res13["sede"]==5 && $res13["departamento"]==3){
														echo'<li class="col-md-6">


															<div class="info">
																<center>
																<img src="maxibienes-admin/admin/'.$res13["foto"].'" class="img-sedes"></center>
																<h2></h2>
																<ul class="contact-us">
																	<li><a href="tel:'.$res13["celular"].'"><i class="fa fa-phone"></i>
																	'.$res13["celular"].'</a></li>
																	<li><a href="mailto:'.$res13["correo"].'"><i class="fa fa-envelope"></i>
																			'.$res13["correo"].'</a></li>
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
						</div>



					</div>
					<!-- END SIDEBAR -->


				</div>
				<div id="hipoteca"></div>
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


	<!-- Libs -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo $url_host ?>js/common.js"></script>
	<script src="<?php echo $url_host ?>js/tabs.js"></script>
	<script src="<?php echo $url_host ?>js/menu.js"></script>
	<script src="<?php echo $url_host ?>js/top.js"></script>
	<script src="<?php echo $url_host ?>js/email.js"></script>
	<script src="<?php echo $url_host ?>js/variables.js"></script>
	<script src="<?php echo $url_host ?>js/scripts.js"></script>
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