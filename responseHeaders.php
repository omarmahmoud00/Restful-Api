<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;


   $client = new Client();

    $response = $client->request(
        'GET',
        'https://jsonplaceholder.typicode.com/posts/1'
    );
 
      $headers = $response->getHeaders();

      foreach ($headers as $key => $value) {
         
            $value = implode(',' ,  $value);
            echo "{$key}:{$value}\r\n";
      }

      $typeOfResponse = $response->getHeader('Content-type');

      if(in_array('application/json; charset=utf-8',$typeOfResponse)){
                 var_dump(json_decode($response->getBody()));
       
        }  else  {
              var_dump($response->getBody());
          }
                    





?>