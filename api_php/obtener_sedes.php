<?php
$ch = curl_init();
$headers =  'Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649';
curl_setopt($ch, CURLOPT_URL,'https://www.simi-api.com/ApiSimiweb/response/sedes');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);
?>