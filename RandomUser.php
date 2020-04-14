<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class RandomUser{

    public function ShowUser($nationalityOpt, $genderOpt){
        $client = new Client();
        $base_url = 'https://randomuser.me/api/?';

        $nationality ='nat='.$nationalityOpt;
        $gender = 'gender='.$genderOpt;
        $response = $client->request(
        'GET',
        // 'api.quotable.io/random'
        $base_url.'&'.$nationality.'&'.$gender
        );
        
        $cont= $response->getBody()->getContents();
        $decode= json_decode($cont,true);
       
        return $decode;
    }
}

?>