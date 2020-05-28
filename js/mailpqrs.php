<?php
require '../api_php/config.php';
if (isset($_POST['email'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $sede = $_POST['sede'];
    
	$email_from = "inmobiliaria@maxibienes.com";
	//$email_to = "calidad@maxibienes.com,direccioncomercial@maxibienes.com";
	$email_to = "direccioncomercial@maxibienes.com";
	
	

	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">'.
	'<title>Correo desde la Web de Maxibienenes de PQRS</title>'.
	'</head>'.
	'<body>'.
	'<p>Este correo se ha escrito desde la Web de Maxibienes seccion PQRS:</p>'.
        '<p>'.'Nombre: ' . $nombre .'</p>'.
        '<p>'.'Apellido: ' . $apellido .'</p>'.
         '<p>'.'Telefono : ' . $telefono . '</p>'.
         '<p>'.'Celular : ' . $celular . '</p>'.
        '<p>'.'Email : ' . $email . '</p>'.
        '<p>'.'Asunto : ' . $asunto . '</p>'.
         '<p>'.'Mensaje : ' . $mensaje .'</p>'.
         '<p>'.'Sede : ' . $sede .'</p>'.
	'</body>'.
	'</html>';
	

	
	// create email headers
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_from . "\r\n" .
			'From:' . $email_from . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_to, $asunto, wordwrap($message), $headers);

	if ($email) {
			echo '<script>alert("Mensaje enviado, muchas gracias.");
			    window.location.href="'.$url_host.'pqrs";
    			</script>';
	} else {
			echo 2;
	}
} else {
	echo 2;
}
?>