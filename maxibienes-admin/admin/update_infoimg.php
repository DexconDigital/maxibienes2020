<?php
require_once ('conexion.php');
$id=$_REQUEST["id"];
$nombre=$_REQUEST["titulo"];
$contenido=$_REQUEST["contenido"];
$zona=$_REQUEST["zona"];
$link=$_REQUEST["link"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador="fotos/";

if($destino == $comparador){
    $con1 = Conect();
     $qry1="SELECT * FROM infoimg where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[1];
    $con = Conect();
    $qry=("update infoimg set nombre='$nombre', contenido='$contenido', imagen='$destino',zona='$zona', link='$link' where id='$id '");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: infoimg.php");
    }
}else{
 $copied = move_uploaded_file($ruta,  $destino);
   $con = Conect();
    $qry=("update infoimg set nombre='$nombre', contenido='$contenido', imagen='$destino',zona='$zona', link='$link' where id='$id '");
    $sql=mysqli_query($con,$qry);  

   if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: infoimg.php");
    }
}