<?php

	//variables para los campos de texto
	$name = strip_tags($_POST['nombre']);
	$apellido = strip_tags($_POST['apellido']);
    $email = strip_tags($_POST['email']);
    $celular = strip_tags($_POST['celular']);
    $edad = strip_tags($_POST['edad']);
    $experiencia = strip_tags($_POST['experiencia']);
    $tiempo = strip_tags($_POST['tiempo']);
    $barrio = strip_tags($_POST['barrio']);
    $descripcion = strip_tags($_POST['descripcion']);
    $direccion = strip_tags($_POST['direccion']);

	//variables para los datos del archivo
	$nameFile = $_FILES['archivo']['name'];
	$sizeFile = $_FILES['archivo']['size'];
	$typeFile = $_FILES['archivo']['type'];
	$tempFile = $_FILES["archivo"]["tmp_name"];
	
	echo "Nombre: " . $nameFile . "<br>";
	echo "Tamaño: " . $sizeFile . "<br>";
	echo "Tipo: ". $typeFile . "<br>";
	echo "Temporal: " . $tempFile . "<br>";
	
	$correoDestino = "gestionhumana@maxibienes.com";
	
	//asunto del correo
	$asunto = "Interesado envio Hoja de vida desde la Página Web Maxibienes";

 	
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
	$cuerpo .= "Correo enviado por: " . $name . " ". $apellido."<br>";
    $cuerpo .="Edad : " . $edad . "<br>";
    $cuerpo .="Email : " . $email . "<br>";
    $cuerpo .="Telefono : " . $celular. "<br>";
    $cuerpo .="Direccion : " . $direccion . "<br>";
    $cuerpo .="Barrio : " . $barrio . "<br>";
    $cuerpo .="Descripción del perfil ocupacional : " . $descripcion. "<br>";
    $cuerpo .="Tiempo de experiencia laboral : " . $tiempo. "<br>";
    $cuerpo .="Experiencia comercial o administrativa : " . $experiencia . "<br>";
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
    //$file = fread($fp, $sizeFile);
	$file = chunk_split(base64_encode($file));

    $cuerpo .= "$file\r\n";
    $cuerpo .= "\r\n"; // línea vacía
    // Delimitador de final del mensaje.
    $cuerpo .= "--=C=T=E=C=--\r\n";
    
    $ok = mail($correoDestino, $asunto, $cuerpo, $cabecera);
    
	//Enviar el correo
	if($ok){
		echo'<script type="text/javascript">
    window.location.href=".././trabaja-con-nosotros";
    </script>';
	}else{
		echo "Error de envio";
	}

?>