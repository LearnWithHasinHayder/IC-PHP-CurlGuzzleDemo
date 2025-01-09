<?php  

//upload file using guzzle

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$filename = "404.jpg";
$response = $client->request('POST', 'http://localhost:8000/incoming-file.php', [
    'multipart' => [
        [
            'name'     => 'file',
            'contents' => fopen($filename, 'r')
        ]
    ]
]);

echo $response->getBody()->getContents();