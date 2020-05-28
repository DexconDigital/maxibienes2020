<?php
require_once 'conexion.php';
$id=$_REQUEST["id"];
$pse=$_REQUEST["pse"];
$seg_pse=$_REQUEST["seg_pse"];
$facebook=$_REQUEST["facebook"];
$twitter=$_REQUEST["twitter"];
$instagram=$_REQUEST["instagram"];
$whatsapp=$_REQUEST["whatsapp"];
$youtube=$_REQUEST["youtube"];
    $con = Conect();
//    copy($ruta,$destino);
    $qry=mysqli_query($con,"update links set pse='$pse', seg_pse='$seg_pse', facebook='$facebook', twitter='$twitter', instagram='$instagram', n_whatsapp= '$whatsapp', youtube='$youtube' where id='$id '");

if(!$qry){
    echo 'No se logro actualizar';
    
}else{
    header("Location: link.php");
}

?>