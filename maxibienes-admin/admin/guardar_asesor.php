<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$celular=$_REQUEST["celular"];
$correo=$_REQUEST["correo"];
$sede=$_REQUEST["sede"];
$departamento=$_REQUEST["departamento"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;

$con = Conect();
$copied = move_uploaded_file($ruta,  $destino);
//    copy($ruta,$destino);
    
    mysqli_query($con, "insert into asesores (foto,celular,correo,sede,departamento) values('$destino','$celular','$correo','$sede','$departamento')");
    header("Location: asesores.php");
?>