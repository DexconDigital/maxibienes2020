<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$nombre=$_REQUEST["titulo"];
$contenido=$_REQUEST["contenido"];
$zona=$_REQUEST["zona"];
$contenidos = str_replace("'",'"',$contenido);

$con = Conect();
//    copy($ruta,$destino);
    
    mysqli_query($con, "insert into informacion (contenido,zona,nombre) values('$contenidos','$zona','$nombre')");
    header("Location: info.php");
?>