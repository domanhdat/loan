<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$secret = 'e34d514f7db5c8aac72a7c8191a09617';

if (!$_POST['payload'] ||
    !isValidPayload($secret) ) {
    return;
}

echo shell_exec("git pull");


function isValidPayload($secret) {

    $headers = getallheaders();
    $hubSignature = $headers['X-Hub-Signature'];

    // Split signature into algorithm and hash
    list($algo, $hash) = explode('=', $hubSignature, 2);

    // Get payload
    $payload = file_get_contents('php://input');

    // Calculate hash based on payload and the secret
    $payloadHash = hash_hmac($algo, $payload, $secret);
    error_log($hash);
    error_log($payloadHash);
    return $hash === $payloadHash;
}