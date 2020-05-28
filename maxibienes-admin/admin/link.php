<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php require("seguridad.php");
require_once("conexion.php"); ?> 
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Maxibienes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="../images/favicon.png" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><em>Maxibienes</em></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                     <?php
                        $user= $_SESSION["usuarioactual"] ;
                        $con=Conect();
                        $qry="SELECT * FROM usuarios where usuario ='$user'";
                        $sql=mysqli_query($con,$qry);
                        $res=  mysqli_fetch_array($sql) ;                            
                    ?>
                    <img src="<?php echo $res[7]; ?>">   
                    </a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Cuenta</strong>
						</li>
						<li class="m_2"><a href="perfil.php"><i class="fa fa-user"></i> Perfil</a></li>
							<li class="m_2"><a href="../salir.php"><i class="fa fa-lock"></i> Salir</a></li>		
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Panel de Control</a>
                        </li>
                        <li>
                            <a href="noticias.php"><i class="fa fa-indent nav_icon"></i>Gestionar Publicaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="noticias.php">Lista de Publicaciones</a>
                                </li>
                                <li>
                                    <a href="addnoticia.php">Agregar Publicación</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-indent nav_icon"></i>Gestionar Contenido<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="informacion.php">Listar Información de contacto</a>
                                </li>
                                <li>
                                    <a href="info.php">Listar Información</a>
                                </li>
                                <li>
                                    <a href="infoimg.php">Listar Información con imagenes</a>
                                </li>
                                <li>
                                    <a href="imagen.php">Listar Imagenes</a>
                                </li>
                                <li>
                                    <a href="link.php">Listar Links</a>
                                </li>
                                <li>
                                    <a href="asesores.php">Listar Asesores</a>
                                </li>

                                <li>
                                    <a href="addinfoimg.php">Agregar Información con Imagenes</a>
                                </li>
                                <li>
                                    <a href="addimagen.php">Agregar Imagenes de Aliados</a>
                                </li>
                                <li>
                                    <a href="addasesores.php">Agregar Asesores</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-body no-padding">
                    <h4>Gestión de Información</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="warning">
                                <th scope="col">Nombre</th>
                                <th scope="col">Link</th>
                                <th scope="col">Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            $con=Conect();
                            $qry="select * from links order by id DESC    ";
                            $sql=mysqli_query($con,$qry);
                            while($res=  mysqli_fetch_array($sql)){
                                
                                    echo '<tr>
                                    <td>Facebook</td>
                                <td>'.$res["facebook"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                <tr>
                                <td>Twitter</td>
                                <td>'.$res["twitter"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                <tr>
                                <td>Youtube</td>
                                <td>'.$res["youtube"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                <tr>
                                <td>Instagram</td>
                                <td>'.$res["instagram"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                <tr>
                                <td>Whatsapp</td>
                                <td>'.$res["n_whatsapp"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                <tr>
                                <td>Pse Medellin</td>
                                <td>'.$res["pse"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                <tr>
                                <td>Pse Sur</td>
                                <td>'.$res["seg_pse"].'</td>
                                <td><a href="actualizarlink.php?id='.$res["id"].'"><i class="fa fa-refresh style="color:#fff;" nav_icon"></i></a></td>
                                </tr>
                                ';
                            }?>  
                        </tbody>
                    </table>
                </div>
    </div> 

    </div>
     
    </div>

      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
