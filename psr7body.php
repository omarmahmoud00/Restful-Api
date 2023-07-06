<?php
require 'vendor\autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;



 $client = new Client();
 $response = $client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/5'
);


//  var_dump($response);    echo $response->getBody()->read(20);  
echo $response->getBody()->read(20);   
 echo $response->getBody()->read(20);  
 echo $response->getBody()->read(20);   
