<?php 
    require_once("js/bd_function.php");
    $datos = array();
    if(isset($_GET['datos']))
    {   
        $datos =  explode('/', $_GET['datos']);
        $ruta_archivo = './views/'.$datos[0].'.php';
        if(is_file($ruta_archivo)){
            include './views/'.$datos[0].'.php';
        }else if($datos[0]== 'blog'){
            if(isset($datos[1])){
                include './views/blog/'.$datos[1].'.php';
            }else{
                include './views/blog/index.php';
            }
        }else{
            include './views/inicio.php';
        }
    }else{
        include './views/inicio.php';
    }
?>