<?php

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['url_inm'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$name_envia = strip_tags(htmlspecialchars($_POST['name_envia']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Inmueble compartido desde Maxibienes";
$email_body = "Hola ".$name_envia.", \n\n".$name." te ha compartido este inmueble:\n\n".$_POST['url_inm']."\n\nMensaje: ".$message;
$headers = "From: noreply@maxibienes.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address".
$headers .= 'X-Mailer: PHP/' . phpversion(); 
mail($to,$email_subject,$email_body,$headers);
echo 1;

?>