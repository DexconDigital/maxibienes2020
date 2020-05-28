<?php

	//variables para los campos de texto
	$name = strip_tags($_POST['nombre']);
    $email = strip_tags($_POST['email']);
    $documento = strip_tags($_POST['doc']);
    if($documento==1){
        
         $archivo="https://drive.google.com/file/d/11JOuR8p7sOeTlqfRq46RvHAC-xVYJIIu/view";
    }
    else if($documento==2){
        $archivo="https://drive.google.com/file/d/11DKO-sXtSzHyz-d4-t816ylpg4o08Ha3/view";
    }
    else if($documento==3){
        $archivo="https://drive.google.com/file/d/1Sl2huQDgeoVYCp3Io2_201n_ZCsqse6T/view";
    }
    else if($documento==4){
        $archivo="https://drive.google.com/file/d/1wG3Q3CNMpE_c-V4J9j-kGiGcp_DKWItB/view";
    }
    else if($documento==5){
        $archivo="https://drive.google.com/file/d/1PBVtqQYDwIflAu2aG8tkrTQnmxHYBqLB/view";
    }
   
	$correoDestino = $email;
	
	//asunto del correo
	$asunto = "Formulario de Aseguradora";

	$cabecera = "MIME-VERSION: 1.0\r\n";
	$cabecera .= "Content-type: multipart/mixed;";

	$cabecera .="boundary=\"=C=T=E=C=\"\r\n";
	$cabecera .= "From: noreply@maxibienes.com";

	$cuerpo = "--=C=T=E=C=\r\n";
	$cuerpo .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$cuerpo .= "\r\n"; // línea vacía
	$cuerpo .= "Correo enviado por: " . $name . "<br>";
	$cuerpo.= $archivo;
	$cuerpo .= "\r\n";// línea vacía

    $cuerpo .= "\r\n"; // línea vacía

    $cuerpo .= "--=C=T=E=C=--\r\n";
    
    $ok = mail($correoDestino, $asunto, $cuerpo, $cabecera);
    
	//Enviar el correo
	if(mail($correoDestino, $asunto, $cuerpo, $cabecera)){
		echo'<script type="text/javascript">
    alert("Correo Enviado");
    window.location.href=".././";
    </script>';
	}else{
		echo "Error de envio";
	}

?>