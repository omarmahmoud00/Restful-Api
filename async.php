<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;
use GuzzelHttp\Psr7\Rewspose;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

   $client = new Client();

    $promise = $client->requestAsync(
        'GET',
        'https://jsonplaceholder.typicode.com/posts/1'
    );

      $promise->then(
             
         function (Response $response){
            echo $response->getBody();
         } ,
         function (RequestException $e) {
            echo $e->getMessage();
            
         }

      );
      $promise->wait();

