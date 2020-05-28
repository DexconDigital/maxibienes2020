<?php
require_once 'conexion.php';
$id=$_REQUEST["id"];
$n_celular=$_REQUEST["celular"];
$correo=$_REQUEST["correo"];

$con = Conect();
//    copy($ruta,$destino);
$qry=mysqli_query($con,"update contacto set n_celular='$n_celular', correo='$correo' where id='$id '");
    header("Location: informacion.php");

if(!$qry){
    echo 'No se logro actualizar';
    
}else{
    header("Location: informacion.php");
}

?>