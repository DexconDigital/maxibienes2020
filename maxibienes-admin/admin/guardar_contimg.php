<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$nombre=$_REQUEST["titulo"];
$contenido=$_REQUEST["contenido"];
$zona=$_REQUEST["zona"];
$link=$_REQUEST["link"];
$foto=$_FILES["imagen"]["name"];
$contenidos = str_replace("'",'"',$contenido);
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;

    $con = Conect();
$copied = move_uploaded_file($ruta,  $destino);
//    copy($ruta,$destino);
    
    mysqli_query($con, "insert into infoimg (imagen,nombre,contenido,zona,link) values('$destino','$nombre','$contenidos','$zona','$link')");
    header("Location: infoimg.php");
?>