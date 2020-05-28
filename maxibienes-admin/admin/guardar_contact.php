<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$n_celular=$_REQUEST["celular"];
$correo=$_REQUEST["correo"];

$con = Conect();
//    copy($ruta,$destino);
    
    mysqli_query($con, "insert into contacto (n_celular,correo) values('$n_celular','$correo')");
    header("Location: informacion.php");
?>