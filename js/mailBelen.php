<?php
if (isset($_POST['email'])) {

	$nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
	$email_from = "inmobiliaria@maxibienes.com";
	$email_to = "arrendamientosbelen@maxibienes.com";
	


	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">'.
	'<title>Correo enviado desde la Web de Maxibienes sede Belén</title>'.
	'</head>'.
	'<body>'.
	'<p>Este correo se ha escrito desde la Web de Maxibienes sede San Belén:</p>'.
        '<p>'.'Nombre: ' . $nombre .'</p>'.
         '<p>'.'Teléfono : ' . $telefono . '</p>'.
        '<p>'.'Email : ' . $email . '</p>'.
        '<p>'.'Asunto : ' . $asunto . '</p>'.
         '<p>'.'Mensaje : ' . $mensaje .'</p>'.
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
			echo '<script type="text/javascript">
    window.location.href=".././";
    </script>';
	} else {
			echo 2;
	}
} else {
	echo 2;
}
?>