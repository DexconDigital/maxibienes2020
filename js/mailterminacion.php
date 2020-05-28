<?php

	//variables para los campos de texto
	$name = strip_tags($_POST['nombre']);
    $email = strip_tags($_POST['email']);
	$celular = strip_tags($_POST['telefono']);
	$cedula = strip_tags($_POST['cedula']);
    $texto = strip_tags($_POST['texto']);

	//variables para los datos del archivo
	$nameFile = $_FILES['archivo']['name'];
	$sizeFile = $_FILES['archivo']['size'];
	$typeFile = $_FILES['archivo']['type'];
	$type2File = $_FILES['archivo']['type'];
	$tempFile = $_FILES["archivo"]["tmp_name"];
	
	//$correoDestino = "info@maxibienes.com,camilosanchez@tae-ltda.com,Kamiloasl@hotmail.com,kamiloasl@hotmail.com";
  	$correoDestino = "info@maxibienes.com,maxi.fianzacredito@gmail.com";
  
  
	
	
	
	//asunto del correo
    $asunto = "Solicitud de terminación de contrato de arrendamiento";

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
	$cuerpo .= "Correo enviado por: " . $name . "<br>";
    $cuerpo .="Email : " . $email . "<br>";
	$cuerpo .="Telefono : " . $celular. "<br>";
	$cuerpo .="Cédula: " . $cedula. "<br>";
    $cuerpo .="Mensaje : ".$texto."<br>";
	$cuerpo .= "\r\n";// línea vacía

 	// -> segunda parte del mensaje (archivo adjunto)
        //    -> encabezado de la parte
    $cuerpo .= "--=C=T=E=C=\r\n";
    $cuerpo .= "Content-Type: application/octet-stream; ";
    $cuerpo .= "name=" . $nameFile . "\r\n";
    $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
    $cuerpo .= "Content-Disposition: attachment; ";
    $cuerpo .= "filename=" . $nameFile . "\r\n";
    $cuerpo .= "\r\n"; // línea vacía

    $fp = fopen($tempFile, "rb");
    $file = fread($fp, $sizeFile);
	$file = chunk_split(base64_encode($file));

    $cuerpo .= "$file\r\n";
    $cuerpo .= "\r\n"; // línea vacía
    // Delimitador de final del mensaje.
    $cuerpo .= "--=C=T=E=C=--\r\n";

	//Enviar el correo
	if(@mail($correoDestino, $asunto, $cuerpo, $cabecera)){
		echo'<script type="text/javascript">
    window.location.href=".././";
    </script>';
	}else{
		echo "Error de envio";
	}

?>