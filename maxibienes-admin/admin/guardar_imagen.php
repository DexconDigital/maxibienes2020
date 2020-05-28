<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$zona=$_REQUEST["zona"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;

    $con = Conect();
$copied = move_uploaded_file($ruta,  $destino);
//    copy($ruta,$destino);
    
    mysqli_query($con, "insert into imagenes(imagen,zona) values('$destino','$zona')");
    header("Location: imagen.php");
?>