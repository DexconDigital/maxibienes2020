<?php
require_once 'conexion.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$pse=$_REQUEST["pse"];
$seg_pse=$_REQUEST["seg_pse"];
$facebook=$_REQUEST["facebook"];
$twitter=$_REQUEST["twitter"];
$instagram=$_REQUEST["instagram"];
$whatsapp=$_REQUEST["whatsapp"];
$youtube=$_REQUEST["youtube"];
    $con = Conect();
//    copy($ruta,$destino);
    
    mysqli_query($con, "insert into links (pse,seg_pse,facebook,twitter,instagram,n_whatsapp,youtube) values('$pse','$seg_pse','$facebook','$twitter','$instagram','$whatsapp','$youtube')");
    header("Location: link.php");
?>