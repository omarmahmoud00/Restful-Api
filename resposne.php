<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;


   $client = new Client();

    $response = $client->request(
        'GET',
        'https://jsonplaceholder.typicode.com/posts/5'
    );

    //   var_dump($response);
    $body= $response->getBody();
    $content = $body->getContents();
    $json = json_decode($content);

    if($response->getStatusCode()!=200) echo 'failure';
     else   echo $content;

           



?>