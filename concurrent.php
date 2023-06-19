<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;
use GuzzelHttp\Psr7\Rewspose;
use GuzzleHttp\Exception\RequestException; 
// use  GuzzleHttp\Promise\settle;
   $client = new Client();

    $promise1 = $client->requestAsync(
        'GET',
        'https://jsonplaceholder.typicode.com/posts/1'
    );

    $promise2 = $client->requestAsync(
        'GET',
        'https://jsonplaceholder.typicode.com/comments/6'
    );
    
    $promise3 = $client->requestAsync(
        'GET',
        'https://httpbin.org/ip'
    );

    $promises = [ $promise1,$promise2,$promise3];

    $results = GuzzleHttp\Promise\settle($promises)->wait();

      foreach ($results as $result) {
        # code...
          echo $result['value']->getBody();
      }

