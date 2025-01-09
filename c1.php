<?php 

$ch = curl_init('https://hasin.me');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

echo $response;