<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class RandomQuote{

    public function ShowQuote(){
     
        $client = new Client();
        $response = $client->request(
            'GET',
            'api.quotable.io/random'
        );
       
        
        $cont= $response->getBody()->getContents();
        $decode= json_decode($cont,true);

        return $decode;
    }
}

?>