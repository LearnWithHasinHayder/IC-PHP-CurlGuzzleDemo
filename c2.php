<?php  

//download this file https://hasin.me/wp-content/uploads/2017/09/404-1024x683.jpg

$ch = curl_init('https://hasin.me/wp-content/uploads/2017/09/404-1024x683.jpg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

file_put_contents('404.jpg', $response);