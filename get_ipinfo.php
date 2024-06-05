<?php
header('Content-Type: application/json');

// Obtener la IP del usuario
$ip_address = $_SERVER['REMOTE_ADDR'];

// Si la IP es IPv6, intentar obtener la IPv4

$access_token = '3f9fbb3a088fb0';

// Realizar la solicitud a la API de IPinfo.io
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ipinfo.io/{$ip_address}/json?token={$access_token}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si el país está en la lista
$target_countries = [
    'US', 'CA', 'AU', 'NZ', 'UK', 'IE', 'IS', 'PT', 'ES', 'DE', 'NO', 'SE', 'DK', 'FI', 'EE',
    'CH', 'AT', 'NL', 'BE', 'FR'
];

$enable_hotjar = in_array($data['country'], $target_countries);

// Devolver la información necesaria en formato JSON
echo json_encode([
    'ip' => $data['ip'],
    'country' => $data['country'],
    'enable_hotjar' => $enable_hotjar
]);
?>
