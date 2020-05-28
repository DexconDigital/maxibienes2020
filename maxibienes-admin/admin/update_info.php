<?php
require_once 'conexion.php';
$id=$_REQUEST["id"];
$nombre=$_REQUEST["titulo"];
$contenido=$_REQUEST["contenido"];
$zona=$_REQUEST["zona"];
$contenidos = str_replace("'",'"',$contenido);

$con = Conect();
//    copy($ruta,$destino);
$qry=mysqli_query($con,"update informacion set contenido='$contenidos', zona='$zona', nombre='$nombre' where id='$id '");

if(!$qry){
    echo 'No se logro actualizar';
    
}else{
    header("Location: info.php");
}

?>