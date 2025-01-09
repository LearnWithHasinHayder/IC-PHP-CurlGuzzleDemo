<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->get('https://www.worldometers.info/geography/flags-of-the-world/'); // Replace with the correct URL

// Get the response body
$responseBody = $response->getBody()->getContents();

// Initialize Crawler with the response content
$crawler = new Crawler($responseBody);

// Find all the divs with the class "col-md-4" (which contain the flag and country name)
$crawler->filter('div.col-md-4')->each(function (Crawler $node) {
    // Extract the flag image src
    $flagImageSrc = "https://www.worldometers.info/". $node->filter('a img')->attr('src');
    // Extract the country name
    $countryName = $node->filter('div')->last()->text(); // Assuming country name is in the last div

    // Print or process the flag image source and country name
    echo "Country: " . $countryName . "\n";
    echo "Flag Image Source: " . $flagImageSrc . "\n";
    echo "-------------------------------\n";
});
