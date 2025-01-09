<?php 
require 'vendor/autoload.php';

use GuzzleHttp\Client;
$client = new Client();
// $output = $client->request('post', 'https://httpbin.org/anything',[
//     'form_params' => [
//         'name' => 'John Doe',
//         'email' => 'john@doe.com'
//     ]
// ]);

$output = $client->get('https://httpbin.org/anything');
$output = $client->post('https://httpbin.org/anything',[]);
$output = $client->put('https://httpbin.org/anything',[]);
$output = $client->patch('https://httpbin.org/anything',[]);
$output = $client->delete('https://httpbin.org/anything');

echo $output->getBody()->getContents();