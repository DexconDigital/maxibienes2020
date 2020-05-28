<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$nombre_url = $_REQUEST['nameUrl'];
$metaDescription = $_REQUEST['description'];
$keywords = $_REQUEST['keywords'];
$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$fecha=$_REQUEST["fecha"];
$noticia=$_POST["noticia"];
$foto=$_FILES["imagen"]["name"];
$noticias = str_replace("'",'"',$noticia);
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$alt = $_REQUEST['altimg'];

    $con = Conect();
$copied = move_uploaded_file($ruta,  $destino);
//    copy($ruta,$destino);


mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `fecha`, `noticia`, `keywords`, `description`, `nombreUrl`, `textoAlt`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '$fecha', '$noticias ', '$keywords', '$metaDescription', '$nombre_url', '$alt');");
    header("Location: noticias.php");
?>