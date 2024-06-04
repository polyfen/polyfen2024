<?php

function loadEnv(string $dotenvPath)
{
    $env = file_get_contents($dotenvPath);
    $lines = explode("\n", $env);

    foreach ($lines as $line) {
        preg_match("/([^#]+)\=(.*)/", $line, $matches);
        if (isset($matches[2])) {
            putenv(trim($line));
        }
    }
}

function postRequest($url, $data, $requestHeaders = [])
{
    $standardHeaders = [
        'Content-type: application/json',
    ];
    $headers = array_merge($standardHeaders, $requestHeaders);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (curl_errno($ch)) {
        $error = 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);
    $json_result = json_decode($result, true);

    return $json_result;
}