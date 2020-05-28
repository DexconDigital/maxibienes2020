<?php
$paths = explode("/", $_SERVER['REQUEST_URI']);

$path = $paths[count($paths) - 1];
$codesede = "649-";
if ($path !== "sur") {
	$codigo = $datos[2];
	$ch = curl_init();
	$headers =  'Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649';
	curl_setopt($ch, CURLOPT_URL, 'https://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_USERPWD, $headers);
	$result = curl_exec($ch);
	curl_close($ch);
	$r = json_decode($result, true);

	if (isset($r["msn"]) && $r["msn"] === "Inmueble NO Disponible") {
		$codesede = "618-";
		$codigo = $datos[2];
		$ch = curl_init();
		$headers =  'Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618';
		curl_setopt($ch, CURLOPT_URL, 'https://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_USERPWD, $headers);
		$result = curl_exec($ch);
		curl_close($ch);
		$r = json_decode($result, true);
	}
} else {
	$codesede = "618-";
	$codigo = $datos[2];
	$ch = curl_init();
	$headers =  'Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618';
	curl_setopt($ch, CURLOPT_URL, 'https://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_USERPWD, $headers);
	$result = curl_exec($ch);
	curl_close($ch);
	$r = json_decode($result, true);
}

if (!is_array($r)) {
	echo $result;
}

$codigoinm = $codigo;
$codigoinm = str_replace($codesede, '', $codigoinm);
