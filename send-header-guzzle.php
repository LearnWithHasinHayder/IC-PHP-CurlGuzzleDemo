<?php 
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$url = 'https://httpbin.org/anything';
$headers = [
    'Authorization: Bearer 123456',
    'Custom-Header: CustomValue'
];

$response = $client->request('GET', $url, [
    'headers' => $headers
]);

$output = $response->getBody()->getContents();
echo $output;