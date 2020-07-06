<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../api_php/config.php';
require '../vendor/autoload.php';


if ($_POST) {
    $nombre = $_POST['name'];
    $codigo = $_POST['codigo'];
	$email = $_POST['email'];
    $asunto = $_POST['Subject'];
    $mensaje = $_POST['Message'];
    
}

// echo $nombre ,$email ,$asunto,$mensaje , $codigo;
// die();

$mail = new PHPMailer(true);

try {
	$mail->isSMTP();

	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	//acceso
	$mail->CharSet = 'UTF-8';
	$mail->Username = 'masivoinmobiliarias@gmail.com';
	$mail->Password = 'dexcon2019@';

	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	// Mensaje para enviar

	$mail->isHTML(true);
	//Cabecera
	$mail->setFrom('Inmobiliaria@maxibienes.com', 'Inmobiliaria@maxibienes.com');
	//destinos

	 $mail->addAddress('wdsp9898@gmail.com');
	 $mail->addAddress('desarrollo2@dexcondigital.com');
	 $mail->addAddress('alexthunder7@gmail.com');
	 $mail->addAddress('gestion@dexcondigital.com');
	//  $mail->addAddress('arrendamientos@maxibienes.com');
	


	$mail->Subject = 'Mensaje enviado desde la página web Maxibienes sección Inmuebles';
	$mail->Body = '<span>Hola, ' . $nombre . ' quiere contactarse con ustedes, asunto del mensaje: <strong>'.$asunto.'.</strong></span>
                    <h4>Datos del mensaje:</h4>
                    <ul>
                        <li>Código del Inmueble visitado: ' . $codigo . '</li><br>
						<li>Correo: ' . $email . '</li><br>
						<li>Mensaje: ' . $mensaje . '</li><br>
					</ul>
    ';
	$mail->send();
	echo '<script>alert("Mensaje enviado, muchas gracias.");
	window.history.go(-2);
	</script>';
} catch (Exception $e) {
	echo 'algo salio mal', $e->getMessage();
}
