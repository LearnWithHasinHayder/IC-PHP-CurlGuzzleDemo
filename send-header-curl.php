<?php  

$url = 'https://httpbin.org/anything';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer 123456',
    'Custom-Header: CustomValue'
]);
$output = curl_exec($ch);
echo $output;

//guzzle
