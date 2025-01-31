<?php

$url = "http://127.0.0.1:8000/alumno";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json'
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error en la petición: ' . curl_error($ch);
}

curl_close($ch);

$data = json_decode($response, true);

header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
?>