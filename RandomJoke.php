
<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class RandomJoke{

    public function ShowJoke(){
     
        $client = new Client();
        $response = $client->request(
            'GET',
            'https://sv443.net/jokeapi/v2/joke/Any?blacklistFlags=nsfw,religious,racist,sexist&type=single'
        );
       
        
        $cont= $response->getBody()->getContents();
        $decode= json_decode($cont,true);

        return $decode;
    }
}

?>

