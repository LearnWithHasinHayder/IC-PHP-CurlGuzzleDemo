<?php 
//uploading file using curl
// $ch = curl_init('https://httpbin.org/post');
$ch = curl_init('http://localhost:8000/incoming-file.php');
// $filename = "sample.pdf";
$filename = "404.jpg";
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'file' => new CURLFile($filename)
]);
$output = curl_exec($ch);
echo $output;