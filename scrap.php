<?php  
// composer require symfony/dom-crawler
// composer require symfony/css-selector
header("Access-Control-Allow-Origin: *");
$url = 'https://hasin.me';

require 'vendor/autoload.php';
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->request('GET', $url);
$html = $response->getBody()->getContents();

$crawler = new Crawler($html);
$titles = $crawler->filter('h1.entry-title')->each(function (Crawler $node, $i) {
    return $node->text();
});

print_r($titles);