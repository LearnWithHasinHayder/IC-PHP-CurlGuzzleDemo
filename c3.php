<?php  
$ch = curl_init('https://httpbin.org/post?foo=bar');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

$formData = [
    'name' => 'John Doe',
    'email' => 'john@doe.com'
];

curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
$output = curl_exec($ch);
echo $output;