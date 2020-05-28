<?php

	//variables para los campos de texto
	$name = strip_tags($_POST['newsletter_email']);
	
    $correoDestino = "info@maxibienes.com";
	
	//asunto del correo
	$asunto = "Suscripción al boletín de Maxibienes";

 	
 	// -> mensaje en formato Multipart MIME
	$cabecera = "MIME-VERSION: 1.0\r\n";
	$cabecera .= "Content-type: multipart/mixed;";
	//$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
	$cabecera .="boundary=\"=C=T=E=C=\"\r\n";
	$cabecera .= "From: inmobiliaria@maxibienes.com";

	//Primera parte del cuerpo del mensaje
	$cuerpo = "--=C=T=E=C=\r\n";
	$cuerpo .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$cuerpo .= "\r\n"; // línea vacía
	$cuerpo .= "Correo del cliente suscrito: ". $name ."<br>";
    

    
    $ok = mail($correoDestino, $asunto, $cuerpo, $cabecera);
    
	//Enviar el correo
	if($ok){
		echo'<script type="text/javascript">
    window.location.href=".././";
    </script>';
	}else{
		echo "Error de envio";
	}

?>