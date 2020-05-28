<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->
<?php require("seguridad.php");
require_once("conexion.php"); ?> 
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Maxibienes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="../images/favicon.png" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="tinymce/js/tinymce/tinymce.js"></script>
<script>tinymce.init({ 
        selector:'textarea',
    height:300,
    menubar:false,
    plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor colorpicker'],
    language: 'es_MX',
    toolbar: 'undo redo cut copy paste selectall |  fontsizeselect | bold italic underline forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | print link',
    fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 42pt' 
});</script>

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
                        $user="admin";
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
        <?php
            $id=$_GET["id"];
            $zona=$_REQUEST["zona"];
            $con=Conect();
            $qry="SELECT * FROM imagenes where id ='$id'";
            $sql=mysqli_query($con,$qry);
            $res=  mysqli_fetch_array($sql) ;                            
        ?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post" action="update_imagen.php" enctype="multipart/form-data" >
                    <div class="form-group"  style="display:none;" >
                        <label for="focusedinputw" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-8" >
                            <input type="text" class="form-control1" name="id" value="<?php echo $res[0]; ?>" id="id">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="noticia" class="col-sm-2 control-label">Ubicación en la Pagina Actual</label>
                        <div class="col-sm-8">
                        <label for="noticia" class="col-sm-2 control-label" style="text-align: left;"><?php 
                        if($res[2]==1){
                            echo "Slider"; 
                        }
                        else if($res[2]==2){
                            echo "Nuestra Compañia"; 
                        }
                        else if($res[2]==3){
                            echo "Logo Aliados"; 
                        }
                        
                        ?></label>
                        </div>
                        
                    </div>
                   
                    <div class="form-group">
                        <label for="noticia" class="col-sm-2 control-label">Imagen Actual</label>
                        <div class="col-sm-8">
                            <img width="20%" height="20%" src="<?php echo $res[1];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="noticia">Subir Imagen</label>
                        <input type="file" name="imagen" id="imagen" value="<?php echo $res[1];?>">
                        <input type="hidden" name="zona" value="<?php echo $zona?>">
                    </div>
                    <div class="bs-example" data-example-id="form-validation-states">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Actualizar</button>
                                <button class="btn-default btn">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </form>
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