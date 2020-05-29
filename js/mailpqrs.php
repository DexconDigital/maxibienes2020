<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../api_php/config.php';
require '../vendor/autoload.php';


if ($_POST) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $sede = $_POST['sede'];
}

// echo $nombre ,' ',$apellido,' ',$email,' ',$telefono,' ',$celular,' ',$asunto,' ',$mensaje,' ',$sede;
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
	


	$mail->Subject = 'Mensaje enviado desde la página web Maxibienenes sección PQRS';
	$mail->Body = '<span>Hola, ' . $nombre . ' '.$apellido.' quiere contactarse con ustedes, asunto del mensaje '.$asunto.'.</span>
                    <h4>Datos del mensaje:</h4>
					<ul>
						<li>Teléfono: ' . $telefono . '</li><br>
						<li>Celular: ' . $celular . '</li><br>
                        <li>Correo: ' . $email . '</li><br>
						<li>Mensaje: ' . $mensaje . '</li><br>
						<li>Sede: ' . $sede . '</li><br>
                    </ul>
    ';
	$mail->send();
	echo '<script>alert("Mensaje enviado, muchas gracias.");
	window.location.href="'.$url_host.'pqrs";
	</script>';
} catch (Exception $e) {
	echo 'algo salio mal', $e->getMessage();
}
