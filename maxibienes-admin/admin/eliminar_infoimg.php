
     <?php
     require_once("conexion.php");
    $id=$_GET["id"];
    $con=Conect();
      
$qry="DELETE FROM infoimg WHERE id ='$id'  ";
$sql=mysqli_query($con,$qry);
header("Location: infoimg.php");
                              
  if(!$sql){
      echo 'No se logro realizar la peticion';
      
  }else
  {
      header("Location: infoimg.php");
  }
    
                 
        
        
        ?>
    