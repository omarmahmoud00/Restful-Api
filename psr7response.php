<?php
require 'vendor\autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;



 $client = new Client();
 $response = $client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/5'
);


 var_dump($response);   
 echo $response->getReasonPhrase().'<br>'; 
 echo $response->getStatusCode().'<br>'; 

  $response= $response->withStatus(418);
 echo $response->getStatusCode().'<br>'; 
 echo $response->getReasonPhrase().'<br>'; 

 $response= $response->withStatus(419,'it is me omar ');
 echo $response->getStatusCode().'<br>'; 
 echo $response->getReasonPhrase().'<br>'; 



?>