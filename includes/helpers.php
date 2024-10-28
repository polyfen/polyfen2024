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

function get_client_ip()
{
    // List of possible client IP sources
    $fields = array(
        'HTTP_CF_CONNECTING_IP', // Cloudflare
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR', // This is fallback. It is always present and valid.
    );

    foreach ($fields as $ip_field) {
        $realIp = $_SERVER[$ip_field];
        // Return the one that's not empty and it's a valip IPv4 address
        if (!empty($realIp) && filter_var($realIp, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return $realIp;
        }
    }

    return null;
}