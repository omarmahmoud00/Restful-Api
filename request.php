<?php


require 'vendor\autoload.php'; 
use GuzzleHttp\Client;


   $client = new Client(['base_uri'=>'https://jsonplaceholder.typicode.com/']);

    $response = $client->request(
        'GET',
        'posts/2'
    );

    //   var_dump($response);
      echo $response->getBody() . '<br>';

      $response = $client->request(
        'GET',
        'posts/3'
    );

    //   var_dump($response);
      echo $response->getBody() . '<br>' ;

      $response = $client->request(
        'GET',
        'comments/1'
    );
    

    //   var_dump($response);
      echo $response->getBody() . '<br>' ;

      $response = $client->request(
        'GET',
        'https://httpbin.org/ip'
    );

    //   var_dump($response);
      echo $response->getBody() . '<br>' ;


   








?>