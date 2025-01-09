<?php 

$ch = curl_init('https://httpbin.org/anything');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_PUT, true);

//DELETE
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

$output = curl_exec($ch);
echo $output;