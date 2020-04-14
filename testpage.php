<?php
require 'vendor\autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request(
    'GET',
    // 'api.quotable.io/random'
    'https://sv443.net/jokeapi/v2/joke/Any?blacklistFlags=nsfw,religious,racist,sexist&type=single'
);
//var_dump($response);

$cont= $response->getBody()->getContents();
//var_dump($cont);
$decode= json_decode($cont,true);
//var_dump ($decode);
$quotes = $decode['joke'];
echo $quotes; 
?>

