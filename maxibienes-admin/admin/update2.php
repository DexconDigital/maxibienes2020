<?php
require_once ('conexion.php');

$id=$_REQUEST["id"];
$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$noticia=$_REQUEST["noticia"];
$nombre_url = $_REQUEST['nameUrl'];
$metaDescription = $_REQUEST['description'];
$keywords = $_REQUEST['keywords'];
$alt = $_REQUEST['altimg'];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador="fotos/";

if($destino == $comparador){
    $con1 = Conect();
     $qry1="SELECT * FROM noticias where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[3];
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino',noticia='$noticia', description='$metaDescription', keywords='$keywords', nombreUrl='$nombre_url', textoAlt='$alt'   where id='$id '");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: noticias.php");
    }
}else{
 $copied = move_uploaded_file($ruta,  $destino);
   $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino',noticia='$noticia', description='$metaDescription', keywords='$keywords', nombreUrl='$nombre_url', textoAlt='$alt'  where id='$id '");
    $sql=mysqli_query($con,$qry);  

   if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: noticias.php");
    }
}
