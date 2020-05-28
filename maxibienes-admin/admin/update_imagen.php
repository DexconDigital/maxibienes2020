<?php
require_once ('conexion.php');
$id=$_REQUEST["id"];
$zona=$_REQUEST["zona"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador="fotos/";

if($destino == $comparador){
    $con1 = Conect();
     $qry1="SELECT * FROM imagenes where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[1];
    $con = Conect();
    $qry=("update imagenes set imagen='$destino',zona='$zona' where id='$id '");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: imagen.php");
    }
}else{
 $copied = move_uploaded_file($ruta,  $destino);
   $con = Conect();
    $qry=("update imagenes set imagen='$destino',zona='$zona' where id='$id '");
    $sql=mysqli_query($con,$qry);  

   if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: imagen.php");
    }
}
?>